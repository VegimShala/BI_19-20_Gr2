<?php
// Initialize the session
session_start();
 
// // Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//   header("location: index.php");
//   exit;
// }

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT email, pass FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $email, $hashed_password);
                    
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $hashed_password){
                            // Password is correct, so start a new session
                         
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = "true";
                            
                            $_SESSION["email"] = $email;   
                                
                            $sql1 = "SELECT * FROM Users WHERE email = '$email' AND lv = 'Admin'";
                            $result = $conn->query($sql1);
                            if ($result->num_rows > 0) {
                               $_SESSION["isAdmin"] = "true";
                            }
                            else
                            {
                                if(isset($_SESSION["isAdmin"]))
                                {
                                    unset($_SESSION["isAdmin"]);
                                }
                            }
                               

                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.".$hashed_password.$password;
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in</title>
<link rel="stylesheet" type="text/css" href="css/headerFooter.css" />
<link rel="icon" href="images/flag.jpg">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form{
    width: 30%;
    display: block;
    margin: 0 auto;
    padding: 10%;
}
#entrance1{
    height: 150px;
    background-color: rgb(13, 21, 60);
}
#entrance1 h1{
    color: white;
    margin:3%;
}
.container{
    width: 100%;
    border: 3px solid #f1f1f1;
    border-bottom: 50px solid #f1f1f1;
    padding: 16px;
}
input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

span.psw {
  float: right;
  padding-top: 16px;
}
</style>
<script src="js/nav.js"></script>
</head>
<body onload="navActive('drop'); navActive('login');">
    <div class="wrapper" id="po">
        <div id='blur'>
        </div>
        <header id="entrance1">
               
            <p>Kosovo</p>
           <nav>
                <ul>
                    <li><a href="index.php" id="home">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="Places.php">PLACES</a></li>
                    <li><a href="Services.php">SERVICES</a></li>
                     <?php if(!isset($_SESSION["loggedin"])){?>
                        
                    <li><a href="login.php">Log in</a></li><?php } else {?>
                    <li><a href="logout.php">Log out</a></li><?php }?></li>
                </ul>
            </nav>
            <h1 style="text-align: center;">Login</h1>
        </header>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container" >
            <label for="uname" id="some" ><b> User Email</b></label>
            <input type="email"name='email' placeholder="Enter Email" id="email" >
            <p id="msg" style="color:darkblue; margin:1%"></p>
            <p> <?php echo $email_err; ?></p>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>
                <p id="warn" style="color:darkblue; margin:1%"></p>
                <p> <?php echo $password_err; ?></p>
            <button id="bt1" type="submit" onclick="CheckPassword()">Login</button>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label><br><br>
            <p>Are you new a new member?  <a href="signup.php" style="color:darkblue">SignUp</a></p>
        </div>
        </form>
    </div>
    
</body>
</html>
