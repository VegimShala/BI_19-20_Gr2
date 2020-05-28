


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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="About.html">ABOUT</a></li>
                    <li><a href="Gallery.html">GALLERY</a></li>
                    <li><a href="Places.html">PLACES</a></li>
                    <li><a href="Services.html" id="serviceNav">SERVICES</a></li>
                    <li><a href="#" id="drop">MORE</a>
                        <div id="dropdown">
                            <ul>
                                <li><a href="Feedback.html">Feedback</a></li>
                                <li><a href="login.html">Log in</a></li>
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

                <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container" >

            <label for="services" id="some" ><b>Select activity</b></label>
             <select id="services" type="text" name="activity" >
            <option selected="selected" ></option>
            <option value="Activities">Activities</option>
            <option value="Festivals">Festivals</option>
            <option value="Events">Events</option>
            <option value="Monuments">Monuments</option>
            <option value="Food and Drink">Food and Drink</option>
             </select>

                     <label for="fname" id="some" ><b>Name of service</b></label>
             <select id="fname" type="text" name="services" >
            <option selected="selected" ></option>
            <option value="Tour to Rugova">Tour to Rugova</option>
            <option value="Tour to Ulpiana">Tour to Ulpiana</option>
            <option value="Events">Sunny Hill Festival</option>
            <option value="Monuments">Pri Film Fest</option>
            <option value="Food and Drink">The Lily of Prizren</option>

             <option value="Tour to Rugova">17 February</option>
            <option value="Tour to Ulpiana">Prite nShesh</option>
            <option value="Events">DOKUTECH</option>
            <option value="Monuments">Lidhja e Prizrenit</option>
            <option value="Food and Drink">Lidhja e Prizrenit</option>
             <option value="Tour to Rugova">Mosque of Sinan Pasha</option>
            <option value="Tour to Ulpiana">National Museum of Kosovo</option>
            <option value="Events">Famous restaurants in Prizren</option>
            <option value="Monuments">Famous restaurants in Peja</option>
            <option value="Food and Drink">The Lily of Prizren</option>
             </select>

          
             <label for="img" id="some"><b>Select image:</b></label>
            <input type="file" id="img" name="img" accept="image/*">

                <p id="warn" style="color:darkblue; margin:1%"></p>
            <!--     <p> <?php echo $password_err; ?></p> -->
            <button id="bt1" type="submit" >Edit Service</button>
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
    <script src="js/contactval.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#services').on("change", function(){
            /* Get input value on change */
            var inputVal = $(this).val();
            console.log(inputVal);
            var resultDropdown = $("#fname");
            if(inputVal){
                $.get("backend-editform.php", {term: inputVal}).done(function(data){
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else{
                resultDropdown.empty();
            }
        });
    });
    </script>
</body>

</html>