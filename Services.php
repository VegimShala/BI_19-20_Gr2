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
    <script src="js/service.js"></script>
 
    <script type="text/javascript">
        window.onscroll = myFunction; //calling myFunction each time we scroll
    </script>
    <title>Services</title>
    <script src="js/nav.js"></script>
</head>

<body onload="navActive('serviceNav')">

    <div  id="w1" class="wrapper">
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
                    <li><a href="Services.html" id="serviceNav">SERVICES</a></li>
                    <li><a href="#" id="drop">MORE</a>
                        <div id="dropdown">
                            <ul>
                            <li><a href="Feedback.php">Feedback</a></li>
                                <?php if(!isset($_SESSION["loggedin"])){
                                    ?>
                                <li><a href="login.php">Log in</a></li><?php } else {?>
                                    <li><a href="logout.php">Log out</a></li><?php }?>
                            </ul>
                        </div>
                    </li>
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

        <div id="services">

            <div id="list1">
                <nav>
                    <ul>
                        <li><a href="#" class="s1">Activities</a></li>
                        <li><a href="#" class="s1">Festivals</a></li>
                        <li><a href="#" class="s1">Events</a></li>
                        <li><a href="#" class="s1">Monuments</a></li>
                        <li><a href="#"
                                class="s1">Food and drink</a></li>

                    </ul>
                </nav>
            </div>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.s1').on("click", function(){
        /* Get input value on change */

        var inputVal = $(this).html();
       
        var resultDropdown = $(".service1");
        if(inputVal.length){
            $.get("serv.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
     });

     $(document).on("click",'.text p',function(){
        /* Get input value on change */

        var inputVal = $(this).html();
        console.log(inputVal);
        var resultDropdown = $("#rugova");
        if(inputVal.length){
            $.get("serv1.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                $('#Nightlife').hide();
                resultDropdown.html(data);console.log(data);
            });
        } else{
            resultDropdown.empty();
        }
     });
    
   
});
</script>
            <div id="col">
                <div class="row1">
                     <div class="service1"></div>
                </div>
                
            </div>
            <div>
            <?php 
            
            if(isset($_SESSION["isAdmin"]))
            {
                ?>
            
            <a href="ServicesForm.php"><img id="plus" src="images/plus.png" alt="plus" style="width: 30px; height: 30px " ></a>
                <a href="ServicesEdit.php"><img src="images/edit.png" alt="edit" id="edit"  style="width: 30px; height: 30px " ></a>
                <a href="ServicesDelete.php"><img src="images/delete.png" alt="delete" id="edit"  style="width: 30px; height: 30px " ></a>
                <?php } ?>
            </div>
        </div>
          

        <div id="rugova">

        </div>
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