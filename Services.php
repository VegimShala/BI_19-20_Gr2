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
                            <li><a href="Feedback.php">Feedback</a></li>
                                <?php if(!isset($_SESSION["loggedin"])){
                                    ?>
                                <li><a href="login.php">Log in</a></li><?php } else {?>
                                    <li><a href="#">Log out</a></li><?php }?>
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

            <?php 
            
            if(isset($_SESSION["isAdmin"]))
            {
                ?>
            
            <a href="ServicesForm.php"><img id="plus" src="images/plus.png" alt="plus" style="width: 30px; height: 30px " ></a>
                <a href="tour.php"><img src="images/edit.png" alt="edit" id="edit"  style="width: 30px; height: 30px " ></a>
                <a href="ServicesDelete.php"><img src="images/delete.png" alt="delete" id="edit"  style="width: 30px; height: 30px " ></a>
                <?php } ?>

        </div>
          

        <div id="Nightlife">
            <h3>Nightlife Tour</h3>
            <div class="information">

                <div class="info">
                    <div class="title">
                        <p class="emri">Hamam Jazz Bar</p>
                        <p class="emri2">Bar, Cocktail Bar, European,</p>
                    </div>

                    <figure>
                        <img src="images/hamam.jpg" alt="foto">
                        <figcaption>
                            <p>Hamam Jazz Bar in Pristina serves some of the best cocktails in town | &copy; Africa
                                Studio /
                                Shutterstock</p>
                        </figcaption>
                    </figure>

                    <p class="text">For jazz lovers, there is only one place to go in Pristina – Hamam Jazz Bar. The
                        bar, selected in 2013 as one of the top five bar designs in the world, is a unique place in
                        the Kosovar capital city. Extremely well furnished with innovative and sustainable designs,
                        the bar also serves some of the best cocktails in town. Hosting international as well as
                        local jazz artists and bands, this is a perfect venue to enjoy an evening of good music and
                        excellent drinks.</p>

                    <a href="javascript:HideContent1(['hide1'])"> More Info</a>
                    <div id="hide1">
                        <div class="info2">
                            <address>
                                <div>
                                    <img src="images/mail.png" alt="foto">
                                </div>
                                <a href="mailto:webmaster@example.com">Hamam Jazz Bar</a>.<br>
                                <div>
                                    <img src="images/location.jpg" alt="foto">
                                </div>
                                8 Rruga Hajdar Dushi, Pristina, Kosovo<br>
                                <div>
                                    <img src="images/phone.png" alt="foto">
                                </div>
                                +38138222289<br>
                                <div>
                                    <img src="images/fb.png" alt="foto">
                                </div>
                                <a href="https://www.facebook.com/hamambarprishtina/">Visit Facebook page<br></a>

                                <div>

                                    <img src="images/open.jpg" alt="foto">
                                </div>
                                <a
                                    href="https://www.google.com/maps/place/Hamam+Jazz+Bar/@42.6630129,21.160866,15z/data=!4m5!3m4!1s0x0:0xeada84f255601b8b!8m2!3d42.6630129!4d21.160866F">Open
                                    In Google Maps</a>

                            </address>
                            <p class="t2">
                                Atmosphere: <br>
                                Romantic, Secret
                            </p>

                            <img src="images/clock.png" alt="foto">


                            <table>
                                <tr>
                                    <td class="t1">Sun:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Mon:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Tue:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Wed:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Thur:</td>

                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Fri:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <div id="work" class="information">

                <div class="info">
                    <div class="title">
                        <p class="emri">American Sports Bar</p>
                        <p class="emri2">Bar, Pub, American</p>
                    </div>

                    <figure>
                        <img src="images/americanbar1.jpg" alt="foto">
                        <figcaption>
                            <p>American Sports Bar in Pristina serves some of the best international and local beers
                                | &copy; U3144362 / WikiCommons</p>
                        </figcaption>
                    </figure>

                    <p class="text">Near Pristina’s old town, which is a maze of cobblestoned streets with
                        traditional houses, is the American Sports Bar. As the name suggests, it’s an American-style
                        bar mostly frequented by the international community living in Pristina. The American Sports
                        Bar is a great choice for travellers who may be feeling homesick or local people who just
                        want to drink some international or local beers and spend a night watching football or
                        rugby.</p>

                    <a href="javascript:HideContent1(['hide2'])"> More Info</a>
                    <div id="hide2">

                        <div class="info2">
                            <address>
                                <div>
                                    <img src="images/mail.png" alt="foto">
                                </div>
                                <a href="mailto:webmaster@example.com">American Sports Bar</a>.<br>
                                <div>
                                    <img src="images/location.jpg" alt="foto">
                                </div>
                                27 Rruga Ismail Dumoshi, Pristina, Kosovo<br>
                                <div>
                                    <img src="images/phone.png" alt="foto">
                                </div>
                                +38344879028<br>
                                <div>
                                    <img src="images/fb.png" alt="foto">
                                </div>
                                <a href="https://www.facebook.com/americansportbar/">Visit Facebook page<br></a>

                                <div>
                                    <img src="images/open.jpg" alt="foto">
                                </div>
                                <a
                                    href="https://www.bing.com/maps?v=2&pc=FACEBK&mid=8100&rtp=%7Epos.42.666324793288_21.173458891206_American+Sports+Bar&cp=42.666324793288%7E21.173458891206&lvl=16&sty=r&rtop=0%7E0%7E0%7E&mode=D&FORM=FBKPL6&mkt=en-US&fbclid=IwAR0aMCE6T2a-kM4OAgBoLDhPZHAMX-889xF7EX-e62-R88mSsihUdH-iCOI">Open
                                    In Google Maps</a>
                            </address>
                            <p class="t2">
                                Atmosphere: <br>
                                Nightlife, Casual
                            </p>
                            <img src="images/clock.png" alt="foto">
                            <table>
                                <tr>
                                    <td class="t1">Sun:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Mon:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Tue:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Wed:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Thur:</td>

                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Fri:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="information">

                <div class="info">
                    <div class="title">
                        <p class="emri">Half and Half</p>
                        <p class="emri2">Bar, Cafe, European</p>
                    </div>

                    <figure>
                        <img src="images/halfnhalf.jpg" alt="foto">
                        <figcaption>
                            <p>Half and Half is right in the centre of Pristina and serves excellent cocktails | ©
                                bridgesward / Pixabay </p>
                        </figcaption>
                    </figure>

                    <p class="text">Not far from the Newborn monument, which is an iconic symbol of Pristina and
                        Kosovo, lies Half and Half, one of the coolest bars of the Kosovar capital. With a sleek,
                        modern design, this bar has everything, whether you’d like to try their coffee, local wines,
                        beers, smoothies, cocktails, drinks or seasonal fruit juices. It is right in the city centre
                        and offers lovely views of the central square of Pristina.</p>

                    <a href="javascript:HideContent1(['hide3'])"> More Info</a>
                    <div id="hide3">
                        <div class="info2">
                            <address>
                                <div>
                                    <img src="images/mail.png" alt="foto">
                                </div>
                                <a href="mailto:webmaster@example.com">Jon Doe</a>.<br>
                                <div>
                                    <img src="images/location.jpg" alt="foto">
                                </div>
                                Bulevardi Nënë Tereza, Pristina, Kosovo<br>
                                <div>
                                    <img src="images/phone.png" alt="foto">
                                </div>
                                +377456896 <br>
                                <div>
                                    <img src="images/fb.png" alt="foto">
                                </div>
                                <a href="https://www.facebook.com/halfhalfcafe/">Visit Facebook page<br></a>

                                <div>
                                    <img src="images/open.jpg" alt="foto">
                                </div>
                                <a
                                    href="https://www.google.com/maps/place/Half+%26+Half+Caf%C3%A9/@42.6615823,21.1619236,15z/data=!4m5!3m4!1s0x0:0x7ebad7736aec363b!8m2!3d42.6615823!4d21.1619236">Open
                                    In Google Maps
                                </a>
                            </address>
                            <p class="t2">
                                Atmosphere: <br>
                                Cosy, Romantic
                            </p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="information">

                <div class="info">
                    <div class="title">
                        <p class="emri">Dit’ e Nat’</p>
                        <p class="emri2">Bar, Cafe, European</p>
                    </div>

                    <figure>
                        <img src="images/ditenat.jpg" alt="foto">
                        <figcaption>
                            <p>The beautiful secret patio of Dit' e Nat' | © Francesca Masotti</p>
                        </figcaption>
                    </figure>

                    <p class="text">Dit’ e Nat’ is the coolest place to start your evening in Pristina. This
                        extremely well-designed bar serves some of the best vegan cakes in town, as well as great
                        drinks. The beautiful patio is an ideal place to relax during the summer days. You can
                        admire the impressive collection of books, novels and magazines in the bar, and chat with
                        the university students who spend their time here.</p>

                    <a href="javascript:HideContent1(['hide4'])"> More Info</a>
                    <div id="hide4">
                        <div class="info2">
                            <address>
                                <div>
                                    <img src="images/mail.png" alt="foto">
                                </div>
                                <a href="mailto:webmaster@example.com">Jon Doe</a>.<br>
                                <div>
                                    <img src="images/location.jpg" alt="foto">
                                </div>
                                Rruga Fazli Grajqevci, Pristina, Kosovo<br>
                                <div>
                                    <img src="images/phone.png" alt="foto">
                                </div>
                                +38138742037<br>
                                <div>
                                    <img src="images/fb.png" alt="foto">
                                </div>
                                <a href="https://www.facebook.com/ditenatcafe/">Visit Facebook page<br></a>
                                <div>
                                    <img src="images/open.jpg" alt="foto">
                                </div>
                                <a
                                    href="https://www.google.com/maps/place/Dit'+e+Nat'/@42.6639819,21.1597965,17z/data=!3m1!4b1!4m5!3m4!1s0x13549ee1b24d2ba5:0xf5e27cd8eafa196c!8m2!3d42.663978!4d21.1619852">
                                    Open In Google Maps</a>
                            </address>
                            <p class="t2">
                                Atmosphere: <br>
                                Cosy, Stylish
                            </p>
                            <img src="images/clock.png" alt="foto">
                            <table>
                                <tr>
                                    <td class="t1">Sun:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Mon:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Tue:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Wed:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Thur:</td>

                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                                <tr>
                                    <td class="t1">Fri:</td>
                                    <td>10:00 am</td>
                                    <td>- 8:00 pm</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
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