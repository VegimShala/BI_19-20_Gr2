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
.schedules
{
    
    margin-top: 50px;
}

.schedules table{
border-spacing: 0px;
padding-left: 100px;
padding-right: 100px;

}

.schedules table tr th, .schedules table tr td{
    width: 250px;
    height: 50px;
    text-align: center;
    border-bottom: 1px solid #0D153C;
}
.schedules table tr th
{
    background-color: #0D153C;
    color: white;

}




</style>
<script src="js/nav.js"></script>
</head>
<body onload="navActive('drop'); navActive('login');">
<div id="w1" class="wrapper">
        <div id='blur'>
        </div>

        <header id="entrance1">

            <p>Kosovo</p>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="About.php" id="about1">ABOUT</a></li>
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="Places.php">PLACES</a></li>
                    <li><a href="Services.php" id="serviceNav">SERVICES</a></li>
                    <li><a href="#" id="drop">MORE</a>
                        <div id="dropdown">
                            <ul>
                                <li><a href="Feedback.php">Feedback</a></li>
                                <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                                    ?>
                                <li><a href="login.php">Log in</a></li><?php } else {?>
                                    <li><a href="<?php unset($_SESSION["loggedin"]);?>">Log out</a></li><?php }?>
                            </ul>
                        </div>
                    </li>
                                </ul>
                                </nav>
        </header>
        <div class="schedules">
        <table>
            <tr>
                <th>ID</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Offer</th>
                <th>Room</th>
                <th>User</th>
                <th>Hotel</th>
                <th>Price</th>
            </tr>
            <?php
                $user = $_SESSION["email"];
                if(!isset($_SESSION["isAdmin"]))
                {
                    $sql = "SELECT b.id,b.checkIn,b.checkOut,b.offer,b.room,u.fullname,h.name,b.price 
                FROM (Bookings b INNER JOIN Users u ON b.userId=u.id)
                INNER JOIN Hotels h ON b.hotelId=h.id
                WHERE u.email = '$user';";
                }
                else{
                    $sql = "SELECT b.id,b.checkIn,b.checkOut,b.offer,b.room,u.fullname,h.name,b.price 
                    FROM (Bookings b INNER JOIN Users u ON b.userId=u.id)
                    INNER JOIN Hotels h ON b.hotelId=h.id;";
                }
                
                $result = $conn -> query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $checkIn = $row["checkIn"];
                        $checkOut = $row["checkOut"];
                        $offer = $row["offer"];
                        $room = $row["room"];
                        $fullname = $row["fullname"];
                        $hotel = $row["name"];
                        $price = $row["price"];
                        
                        $patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/','/^\s*{(\w+)}\s*=/');
                        $replace = array ('\3/\4/\1\2', '$\1 =');
                        $d2 = preg_replace($patterns, $replace,$checkOut);
                        
                        echo "<tr>
                                <td>$id</td>
                                <td>$checkIn</td>
                                <td>$d2</td>
                                <td>$offer</td>
                                <td>$room</td>
                                <td>$fullname</td>
                                <td>$hotel</td>
                                <td>$price</td>
                            </tr>";
                }

            }
            
            ?>
        </table>
        <?php
        if(!isset($_SESSION["isAdmin"])){ ?>
        <form class="booking" action="<?php if(!isset($_SESSION['loggedin']))
                {
                    echo 'login.php';
                }
                else
                {
                    echo 'BookingForm.php';
                }
                ?>" style=" width:initial;   display: block;
    margin: 0 auto;
    padding: 10%;">
                    <input style="    height: 50px;
    " type="submit" value="Book a new one" name="book">
                </form>
            <?php }
            else
            {
            ?>
            <form class="booking" action="<?php include 'writeFile.php';$writeUsers = new WriteJSONFile('json'); $writeUsers->writeJSONNew('Bookings'); header("location: bookings.php");?>" style=" width:initial;   display: block;
    margin: 0 auto;
    padding: 10%;">
                    <input style="    height: 50px;
    " type="submit" value="EXPORT TO JSON" name="export">
                </form>
            <?php }?>
    </div>
</div>
    

</body>
</html>
