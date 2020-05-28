<?php
// Initialize the session
session_start();
require_once "config.php";


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

.container{
    width: 100%;
    border: 3px solid #f1f1f1;
    border-bottom: 50px solid #f1f1f1;
    padding: 16px;
}
#fname, input[type=password], input[type=activity],input[type=file], #services{
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

            <!-- <h1>Enjoy Your Dream Vacation</h1> -->
            <canvas id="myCanvas" width="900" height="200">
                Your browser does not support the canvas element.
            </canvas>
            <script>
                var canvas = document.getElementById("myCanvas");
                var ctx = canvas.getContext("2d");
                var grd = ctx.createLinearGradient(0, 190, 900, 190);
                grd.addColorStop(0, "darkblue");
                grd.addColorStop(1, "white");
                ctx.fillStyle = grd;
                ctx.font = "45px Arial";
                ctx.fillStyle = grd;
                ctx.fillText("Enjoy Your Dream Vacation", 310, 190);
            </script>

            <h3>Travel to the any corner of Kosovo, without going around in circles.</h3>
        </header>

                <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container" >


                     <label for="fname" id="some" ><b>Name of service</b></label>
                     <select id="fname" type="text" name="services" >
                     <?php 
                        $sql = "SELECT DISTINCT name FROM Services;";
                        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $t = $row["name"];
                    echo "<option value='$t'>$t</option>";
                }
            }
            else{
                echo "<option> No categories were found </option>";
            }
                     ?>

        </select>
            <button style="margin-top:20px; margin-left:125px; " id="bt1" type="submit" >Delete Service</button>
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
                        <input type="text" name="activity" placeholder="activity Address"class="required"/>
                        <input type="text" name="subject" placeholder="Subject" class="required"/>
                        <textarea name="message" rows="4" cols="25" placeholder="Message"></textarea>
                        <input type="submit" value="SUBMIT"/>
                    </form>
                    
                </div>
            </div>
            <p>Copyright &COPY; 2013 Domain Name <span style="float:right">Template by OS Templates</span></p>
        </footer>
    </div>

</body>

</html>