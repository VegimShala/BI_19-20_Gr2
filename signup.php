<?php
// Include config file
require_once "config.php";

 
// Define variables and initialize with empty values
$fullname=$username=$fullname =$name=$lastname= $username1=$password = $confirm_password =$email= "";
$username_err=$name_err=$username1_err = $password_err = $confirm_password_err =$email_err=$lastname= "";
$addfullname=$addusername= $addpass=$addemail=$id=$addname=$addlastname="";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{

 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                    $addusername=$username;
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    
 if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                    $addemail=$email;
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    if(empty(trim($_POST["name"] || empty(trim($_POST["lastname"])))))
    {
        $name_err = "Please enter a name.";
    } 


    else
    {
        $addname =trim($_POST["name"]);
        $addlastname=trim($_POST["lastname"]);
        $array = array($addname,$addlastname);
        $fullnamePost = implode(" ", $array);
        $sql = "SELECT id FROM users WHERE fullname = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fullname);
            
            // Set parameters
            $param_fullname = $fullnamePost;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $fullname_err = "This email is already taken.";
                } else{
                    $fullname = $fullnamePost;
                    $addfullname=$fullname;
                    echo $addfullname;
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    } 
    
 

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    // if(empty(trim($_POST["confirm_password"]))){
    //     $confirm_password_err = "Please confirm password.";     
    // } else{
    //     $confirm_password = trim($_POST["confirm_password"]);
    //     if(empty($password_err) && ($password != $confirm_password)){
    //         $confirm_password_err = "Password did not match.";
    //     }
    // }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        $addpass=trim($_POST["password"]);

         $count=(int)(rand(1,1000));
         $id=strtoupper(substr($addname,0,1)).strtoupper(substr($addlastname,0,1)).strtoupper(substr($addusername,0,1)).strtoupper(substr($addusername,sizeOf($addusername)-2,sizeOf($addusername))).strtoupper($count);
     
                         

        // Prepare an insert statement
        $sql = "INSERT INTO users (id,fullname,username, email,pass,lv) VALUES ('$id','$addfullname' ,'$addusername', '$addemail','$addpass','User')";
         if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("location: login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $addemail, $param_password);
            
            // Set parameters
            $param_email=$email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
               header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
<title>Sign Up</title>
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
input[type=text], input[type=password], input[type=email]  {
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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="About.html">ABOUT</a></li>
                    <li><a href="Gallery.html">GALLERY</a></li>
                    <li><a href="Places.html">PLACES</a></li>
                    <li><a href="Services.html">SERVICES</a></li>
                    <li ><a href="#" id="drop">MORE</a>
                        <div id="dropdown">
                            <ul >
                            <li><a href="Feedback.html">Feedback</a></li>
                            <li><a href="login.html" id="login">Log in</a></li>
                        </ul>
                    </div>
                    </li>
            </nav>
            <h1 style="text-align: center;">Login</h1>
        </header>
        <form action="#" method="post">
        <div class="container" >
            <label for="fname" id="some" ><b>Firstname</b></label>
            <input type="text" placeholder="Firstname" id="fname" name="name" >
           
             <p id="msg" style="color:darkblue; margin:1%"><?php echo $name_err; ?></p>

            <label for="lname" id="some" ><b>Lastname</b></label>
            <input type="text" placeholder="Lastname" id="lname"  name="lastname" >
            <p id="msg" style="color:darkblue; margin:1%" ><?php echo $name_err; ?></p>
            <label for="uname" id="some" ><b>Username</b></label>
            <input type="text" placeholder="Username" id="uname"  name="username" >
            <p id="msg" style="color:darkblue; margin:1%" ><?php echo $username_err; ?></p>
            <label for="user" id="some" ><b>Email</b></label>
            <input type="email" placeholder="Enter Email" id="user" name="email">
            <p id="msg" style="color:darkblue; margin:1%"> <?php echo $email_err; ?></p>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>
                <p id="msg" style="color:darkblue; margin:1%"> <?php echo $password_err; ?></p>
            <button id="bt1" type="submit" onclick="CheckPassword()">Sign Up</button>
            <label>
           
            </label><br><br>
            
        </div>
        </form>
    </div>
    <script>
        // function CheckPassword() 
    // { 
    // const inputtxt=document.getElementById('psw');
    // const inputem=document.getElementById('email');
    // const em=document.getElementById('msg');

   // try{
   //  if(inputem.value==''){
   //      inputem.style.borderBottom='3px solid darkblue'
   //      throw "Input empty"
   //  }}
   //  catch(err){ msg.innerHTML=err}
    
   //  var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
   //  if(inputtxt.value.match(decimal)) 
   //  { 
   //     return true;
   //  }
   //  else
   //  { 
   //  document.getElementById('warn').innerHTML='Password must contain at least 8 characters,one uppercase letter one digit and one special character';
   //  inputtxt.style.borderBottom='3px solid darkblue'
   //  return false;
   //  }
    // }
    
    
 </script> 
</body>
</html>
