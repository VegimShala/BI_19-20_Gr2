<?php
require_once "config.php";

$name=$room=$checkin=$checkout=$person=$email=$rez=$price ="";
$name_err=$room_err=$checkin_err=$checkout_err=$person_err=$email_err=$rez_err= "";
$addname= $addroom=$addcheckin=$addrez=$addemail=$addperson=$addcheckout=$addprice="";
$imgChanged=false;
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    session_start();
 
    // Validate name
    if(empty(trim($_POST["name"])))
    {
        $name_err = "Please enter a name.";
    }
        else {

         $name = trim($_POST["name"]);
             $addname=$name;
             echo $name;
         }


    // Validate room
     if(empty(trim($_POST["room"]))){
        $room_err = "Please enter a room.";}
        else {

         $room = trim($_POST["room"]);
             $addroom=$room;
             echo $addroom;}


        // Validate checkin
             if(empty(trim($_POST["checkin"]))){
        $checkin_err = "Please enter a checkin.";}
        else {

         $checkin = trim($_POST["checkin"]);
             $addcheckin=$checkin;
             echo $checkin;}

        // Validate checkout
             if(empty(trim($_POST["checkout"]))){
        $checkout_err = "Please enter a checkout.";}
        else {

         $checkout = trim($_POST["checkout"]);
             $addcheckout=$checkout;
             echo $checkout;}


        // Validate email
             if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";}
        else {

         $email = trim($_POST["email"]);
             $addemail=$email;
             echo $email;}

        // Validate person
        if(empty(trim($_POST["person"]))){
        $person_err = "Please enter a person.";}
        else {

         $person = trim($_POST["person"]);
             $addperson=$person;
             echo $person;
             $_SESSION["person"] = $person; }

        // Validate radio button
             if(empty(trim($_POST["rez"]))){
        $rez_err = "Please enter a rez.";}
        else {

         $rez = trim($_POST["rez"]);
             $addrez=$rez;
             echo $rez;
             if ($addrez=='All-inclusive') 
             {
                 $price=100;
             }
             elseif ($addrez=='Just breakfast') {

                 $price=50;
             }
             elseif ($addrez=='No food') {
                $price=30;
             }

              $_SESSION["price"] = $price;


         }

         $addprice=$price*$person;


        // Check input errors before inserting in database
    if(empty($name_err) && empty($room_err) && empty($rez_err) && empty($person_err) && empty($email_err)&& empty($checkin_err) && empty($checkout_err))   
    {

       
          
          $sql = "INSERT INTO bookings (checkIn, checkOut, offer, room, price) VALUES ('$addcheckin','$addcheckout','$addrez', '$addroom', '$addprice')";

         if(mysqli_query($conn, $sql)){
    echo "Records changed successfully.";
    
       
        header("location: BookingResult.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
                
        
    
    
 

        }                   

        
    
    // Close connection
    mysqli_close($conn);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/headerFooter.css" />
    <link rel="stylesheet" type="text/css" href="css/services.css" />
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

input[type=text], input[type=date] , input[type=number],input[type=email],input[type=file],input[type=date], #services{
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

    <script src="js/service.js"></script>
 
    <script type="text/javascript">
        window.onscroll = myFunction; //calling myFunction each time we scroll
    </script>
    <title>Services</title>
    <script src="js/nav.js"></script>
</head>

<body onload="navActive('serviceNav')">

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

          
            <canvas id="myCanvas" width="900" height="200">
                Your browser does not support the canvas element.
            </canvas>
   
        </header>

            <form action="#" method="post">
            <div class="container" >

           
            <label for="fname" id="some" ><b>Name:</b></label>
            <input type="text" placeholder="Your name" id="fname" name="name" >
           <!--  <p id="msg" style="color:darkblue; margin:1%" ><?php echo $servicename_err; ?></p> -->
     
            <label for="email" id="some"><b>Email:</b></label>
            <input name="email" type="email" placeholder="e.x. name@domain.com">
            <!-- <p id="msg" style="color:darkblue; margin:1%" ><?php echo $img_err; ?></p> -->

            <label> <b> Check-in: </b>
                        <input name="checkin" type="date" required>
            </label>
                        <label> <b>Check-out:</b>
                            <input name="checkout" type="date"  required>
            </label><br />
                        <label> <b>Room:</b>
                            <select id="services" name="room">
                                <option>Single room</option>
                                <option>Double room</option>
                                <option>Triple room</option>
                                <option>Villa</option>
                            </select>
                        </label><br />
                        <label for="person" id="some" ><b>Number of persons:</b></label>
            <input type="number" placeholder="e.x. 1" id="fname" name="person" >


                    <label> <b>Choose offer: </b>
                            <select id="services" name="rez">
                                <option>All-inclusive</option>
                                <option>Just breakfast</option>
                                <option>No food</option>
                                </select>
                        </label><br />

            

            
    
            <button id="bt1" type="submit" >Book </button>
            <label>
           
            </label><br><br>
            
        </div>
        </form>

       

        <footer>
            <div>
                <div class="footerDivs" id="blog">
                    <p class="divHeader">From the blog</p>
                    <p class="greenText" >Kosovo Republic</p>
                    <p class="smallText"><span class="greenText">Britanicca</span>, britanicca.com</p>
                    <p class="smallText">Friday, 6th April 2017</p>
                    <p>Kosovo, self-declared independent country in the Balkans region of Europe. Although the
                         United States and most members of the European Union (EU) recognized Kosovo’s declaration 
                         of independence from Serbia in 2008. </p>
                    <p class="greenText"> <a href="https://www.britannica.com/place/Kosovo"> Read More &Gt; </a> </p>
                </div>
                <div class="footerDivs" id="links">
                    <p class="divHeader">Quick Links</p>
                    <nav>
                        <ul>
                            <li>&Gt;<a href="https://kk.rks-gov.net/prishtine/"> Prishtina Municipality </a></li>
                            <li>&Gt;<a href="https://masht.rks-gov.net/"> MASHT </a></li>
                            <li>&Gt;<a href="https://www.uni-pr.edu/"> University of Prishtina </a></li>
                            <li>&Gt;<a href="https://www.rks-gov.net/"> State Portal </a></li>
                            <li>&Gt;<a href="http://geoportal.rks-gov.net/"> Geoportal</a></li>
                            <li>&Gt;<a href="https://en.wikipedia.org/wiki/International_recognition_of_Kosovo"> International Recognition</a></li>
                            <li>&Gt;<a href="https://www.bbc.com/news/world-europe-18328859"> BBC-Kosovo Profile</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footerDivs" id="tweets">
                    <p class="divHeader">Latest Tweets</p>
                    <p class="aligner"> <span class="greenText"><a href="https://twitter.com/EUKosovo?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor&fbclid=IwAR2YbvOEL1unxMS-ZtgkQAjJyfk-KC7i5rdNOSLFgE5XQxzlv_h276fohCI">@EUKosovo </a></span> EU Office/EU Special Representative in Kosovo play the pivotal role in 
                    realising the European agenda for Kosovo with the aim to support its European path.</p>
                    <p class="aligner"> <span class="greenText"><a href="https://twitter.com/kennethandresen?lang=en&fbclid=IwAR1jpXq3NtenDQVlhs2vs3rExUDOVN-QQxKImOV58_SRj0Vl6nXgzav3vZA">@kenethhandresen </a></span> A rare, 100 year old postcard from Gjakova in Kosovo. It is poststamped 
                        both in Prizren and Gjakova and was sent to a woman in Zagreb (Croatia) on April 17, 1920 . #Kosovo #postcard</p>
                </div>
                <div class="footerDivs" id="contact" >
                    <p class="divHeader">Contact Us</p>
                    <form method="post" action="http://www.google.com"  id="form2">
                        <input type="text" name="name" placeholder="Full Name"class="required"/>
                        <input type="text" name="email" placeholder="Email Address"class="required"/>
                        <input type="text" name="subject" placeholder="Subject" class="required"/>
                        <textarea name="message" rows="4" cols="25" placeholder="Message"></textarea>
                        <input type="submit" value="SUBMIT"/>
                    </form>
                    
                </div>
            </div>
            <p>Copyright &COPY; 2013 Domain Name <span style="float:right">Template by OS Templates</span></p>
        </footer>
    </div>
    <script src="js/contactval.js"></script>
</body>

</html>