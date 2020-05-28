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

        <div id="services">

            <div id="list1">
                <nav>
                    <ul>
                        <li><a href="javascript:HideContent(['service1', 'service2','service3','service4','service5'])"
                                id="s1">Activities</a></li>
                        <li><a href="javascript:HideContent(['service2','service1','service3','service4','service5'])"
                                id="s2">Festivals</a></li>
                        <li><a href="javascript:HideContent(['service3','service2','service1','service4','service5'])"
                                id="s3">Events</a></li>
                        <li><a href="javascript:HideContent(['service4','service2','service3','service1','service5'])"
                                id="s4">Monuments</a></li>
                        <li><a href="javascript:HideContent(['service5','service2','service3','service4','service1'])"
                                id="s5">Food and drink</a></li>

                    </ul>
                </nav>
            </div>

            <div id="col">
                <div class="row1">
                    <div id="service1">
                        <a
                            href="javascript:HideContent2(['Nightlife','rugova','ulpiana','sunnyhill','suni','sunii','lidhja','xhamia','muzeu','prishtina','prizreni','peja','kosova','doku','prite'])">
                            <div class="service">
                                <img src="images/night1.jpg" alt="foto">
                                <div class="text">
                                    <p>Nightlife Tour</p>
                                </div>
                            </div>
                        </a>
                        <a
                            href="javascript:HideContent2(['rugova','Nightlife','ulpiana','sunnyhill','suni','sunii','lidhja','xhamia','muzeu','prishtina','prizreni','peja','kosova','doku','prite'])">
                            <div class="service">
                                <img src="images/rugova2.jpg" alt="foto">
                                <div class="text">
                                    <p>Tour to Rugova</p>
                                </div>
                            </div>
                        </a>
                        <a
                            href="javascript:HideContent2(['ulpiana','Nightlife','rugova','sunnyhill','suni','sunii','lidhja','xhamia','muzeu','prishtina','prizreni','peja','kosova','doku','prite'])">
                            <div class="service">
                                <img src="images/ulpiana1.jpg" alt="foto">
                                <div class="text">
                                    <p>Tour to Ulpiana</p>
                                </div>
                            </div>
                        </a>

      
                    

                    </div>
                </div>
                <div class="row1">
                    <div id="service2">
                        <a
                            href="javascript:HideContent2(['sunnyhill','suni','sunii','ulpiana','Nightlife','rugova','kosova','prite','doku','lidhja','xhamia','muzeu','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/sunnyhill.jpg" alt="foto">
                                <div class="text">
                                    <p>Sunny Hill Festival</p>
                                </div>
                            </div>
                        </a>
                        <a
                            href="javascript:HideContent2(['suni','sunnyhill','sunii','ulpiana','Nightlife','rugova','kosova','prite','doku','lidhja','xhamia','muzeu','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/film.jpg" alt="foto">
                                <div class="text">
                                    <p>Pri Film Fest</p>
                                </div>
                            </div>
                        </a>
                        <a
                            href="javascript:HideContent2(['sunii','suni','sunnyhill','ulpiana','Nightlife','rugova','kosova','prite','doku','lidhja','xhamia','muzeu','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/zambaku.jpg" alt="foto">
                                <div class="text">
                                    <p>The Lily of Prizren</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row1">
                    <div id="service3">
                        <a
                            href="javascript:HideContent2(['kosova','sunnyhill','suni','sunii','ulpiana','Nightlife','rugova','prite','doku','lidhja','xhamia','muzeu','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/kosova6.jpg" alt="foto">
                                <div class="text">
                                    <p>17 February</p>
                                </div>
                            </div>
                        </a>
                        <a
                            href="javascript:HideContent2(['prite','sunii','suni','sunnyhill','ulpiana','Nightlife','rugova','kosova','doku','lidhja','xhamia','muzeu','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/prite.jpg" alt="foto">
                                <div class="text">
                                    <p>Prite n'Shesh</p>
                                </div>
                            </div>
                        </a>
                        <a
                            href="javascript:HideContent2(['doku','prite','sunii','suni','sunnyhill','ulpiana','Nightlife','rugova','kosova','lidhja','xhamia','muzeu','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/doku.jpg" alt="foto">
                                <div class="text">
                                    <p>DOKUTECH</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row1">
                    <div id="service4">
                        <a
                            href="javascript:HideContent2(['lidhja','prite','sunii','suni','sunnyhill','ulpiana','Nightlife','rugova','kosova','doku','xhamia','muzeu','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/lidhja.jpg" alt="foto">
                                <div class="text">
                                    <p>Lidhja e Prizrenit</p>
                                </div>
                            </div>
                        </a>
                        <a
                            href="javascript:HideContent2(['xhamia','prite','sunii','suni','sunnyhill','ulpiana','Nightlife','rugova','kosova','doku','lidhja','muzeu','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/xhamia2.jpg" alt="foto">
                                <div class="text">
                                    <p>Mosque of Sinan Pasha</p>
                                </div>

                            </div>
                        </a>
                        <a
                            href="javascript:HideContent2(['muzeu','prite','sunii','suni','sunnyhill','ulpiana','Nightlife','rugova','kosova','doku','lidhja','xhamia','prishtina','prizreni','peja'])">
                            <div class="service">
                                <img src="images/muzeu3.jpg" alt="foto">
                                <div class="text">
                                    <p>National Museum of Kosovo</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
            <?php 
            if(isset($_SESSION["isAdmin"]))
            {
                echo "blla blla blla";
                ?>
            
            <a href="ServicesForm.php"><img id="plus" src="images/plus.png" alt="plus" style="width: 30px; height: 30px " ></a>
                <a href="tour.php"><img src="images/edit.png" alt="edit" id="edit"  style="width: 30px; height: 30px " ></a>
                <?php } else { echo "bllu bllu bllu"; } ?>
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

                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d752311.6037919457!2d20.3416435869496!3d42.56129743855055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13537af354bf7df1%3A0xbfffeedfabc31791!2sKosovo!5e0!3m2!1sen!2s!4v1577743552934!5m2!1sen!2s"
                 width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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

            <h3>Tour to Rugova</h3>
            <div id="start">
                <img src="images/brugova8.jpg" alt="fotot">
                <p id="t2"> Starting tour</p>
                <p id="text2">Among the tourist destinations to show you can get into the list of top Kosovar
                    destinations,
                    we cannot fail to introduce you to the Rugova Mountains, as one of the most beautiful places in
                    Kosovo,
                    where you can make these memorable uses in the fresh air of nature that is really true Generous
                    with
                    this seller. </p>
            </div>
            <div id="start1">
                <img src="images/brugova11.jpg" alt="fotot">
                <p class="t1"> Exploring the Rugova Mountains</p>
                <p class="text">You can visit this wonderful province at any time of the year, confident in your
                    entertainment, which begins with nature walks, gorgeous greenery, long expeditions to the most
                    beautiful places, enjoying natural food and hospitality. Together, it concludes with the skiing that
                    awaits you in the heart of winter, slipping on gentle, rough slopes at the same time. </p>
            </div>
            <div id="start2">
                <img src="images/brugova6.jpg" alt="fotot">
                <p class="t1"> Beautiful natyre</p>
                <p class="text">Rugova is a separate locality consisting of 13 villages, which extend west of the city
                    of Peja, on both sides of this city. Rugova begins where the Peja Bistrica flows from the Rugova
                    Gorge and continues along this river to its sources at Qaf Qakorri in the west </p>
            </div>
            <div id="start3">
                <img src="images/brugova2.jpg" alt="fotot">
                <p class="t1"> The tour to the Lake</p>
                <p class="text">If you are not too tired and want to enjoy the beauty of the Lake more, you can continue
                    hiking to the Little Lake or otherwise known as Drelaj Lake.
                    To get to Little Lake, you have to follow the path and walk for another 20 minutes. </p>
            </div>
            <div id="start4">
                <img src="images/brugova3.jpg" alt="fotot">
                <p class="t1"> Enjoying view</p>
                <p class="text">In Rugova, at an altitude of 1,970 meters, surrounded by high hills and numerous rocks,
                    there is the Great Lake (Kuqishta Lake), whose beauty is fascinating. The Little Lake is full of
                    rocks and icy water, but it is also an ideal place to relax.
                    All those who want to combine nature and swimming should definitely visit the Lake and be amazed at
                    the beauty of Kosovo </p>
            </div>
            <div id="start5">
                <img src="images/brugova9.jpg" alt="fotot">
                <p class="t1"> Beautiful places near the lake</p>
                <p class="text">MAGRA AUSTRIA is a natural ecohotel. It rises in the middle of a stunning landscape, in
                    an area with a curative climate, untouched by air and acoustic pollution. The hotel is located 1450m
                    above sea level; just 115 km from Pristina. </p>
            </div>
            <div id="start6">
                <img src="images/brugova10.jpg" alt="fotot">
                <p class="t1"> Spent night here!</p>
                <p class="text">After a day spent hiking on Mountains and seeing the lakes that this beautiful place
                    has,
                    spenting the night here wolud end up your adventure in the best way possible. </p>
            </div>
        </div>
        <div id="ulpiana">
            <h3>
                Tour to Ulpiana
            </h3>
            <div id="hulpiana">
                <div class="card" id="start7">
                    <img src="images/tulpiana.jpg" alt="fotot">
                    <p class="t1"> An ancient Roman city</p>
                    <p class="text">Ulpiana Antic City is believed to have been founded at the beginning of the second
                        century BC, and it has flourished during the third and fourth century. </p>
                </div>
                <div class="card" id="start8">
                    <img src="images/tulpiana2.jpg" alt="fotot">
                    <p class="t1"> More than 100 hectares worth of objects within the territory of the ancient town</p>
                    <p class="text">It is supposed that it covered an area of more than 1000 kilometers and it was
                        located
                        quite close to the rich mining </p>
                </div>
                <div class="card" id="start9">
                    <img src="images/tulpiana3.jpg" alt="fotot">
                    <p class="t1"> The ruins of a building with a beautiful mosaic are found in the south of the city.
                    </p>
                    <p class="text">Historians believe that natural resources were the reason why this area got
                        conquered by
                        Romans, and remained under their invasion for centuries </p>
                </div>
                <div class="card" id="start10">
                    <img src="images/tulpiana4.jpg" alt="fotot">
                    <p class="t1"> After the earthquake Justinian gave a new name to the city: Justiniana Secunda</p>
                    <p class="text">The major part of the town was destroyed during the fifth century by the Goths and
                        Huns,
                        and the remaining parts were destroyed a few decades later by a catastrophic earthquake. </p>
                </div>
                <div class="card" id="start11">
                    <img src="images/tulpiana5.jpg" alt="fotot">
                    <p class="t1"> Emperor Justinian rebuilt the city and its fortifications</p>
                    <p class="text">Nowadays its ruins can be visited in the territory of Prishtina. </p>
                </div>
            </div>
        </div>
        <div id="sunnyhill">
            <h3>Sunny Hill Festival</h3>

            <p id="textd"> Drag video into the box and play it. </p>
            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">

                <audio id="drag1" draggable="true" ondragstart="drag(event)" width="336" height="69" controls>
                    <source src="images/sunnyhill.mp3" type="audio/mp3">
                    Your browser does not support the video tag.
                </audio>
            </div>


            <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div id="wrap">
                <p id="textwrap">Would you like to see a performance of this song... <br>Stay Tuned</p>
            </div>
            <div>
                <img src="images/sunnyhill9.jpg" alt="fotot">
                <p class="t1"> Sunny Hill Festival's queen.</p>
                <p class="text">SUNNY HILL Festival is the biggest festival organized in Kosovo. </p>
            </div>
            <div>
                <img src="images/sunnyhill2.jpg" alt="fotot">
                <p class="t1"> Miley Cyrus performing in Kosovo</p>
                <p class="text">Sunny Hill Festival is an international music festival of the highest standards, one
                    that puts Prishtina on the festival map as a not-to-be-missed cultural place, in a country that
                    loves music and knows how to have fun. </p>
            </div>
            <div>
                <img src="images/sunnyhill3.jpg" alt="fotot">
                <p class="t1"> GASHI performing for the first time at Sunny Hill Festival</p>
                <p class="text">We want to invite music lovers from around the world to come and enjoy our country, as
                    well as performances of some of the best-known performers of our modern time and charts. </p>
            </div>
            <div>
                <img src="images/sunnyhill4.jpg" alt="fotot">
                <p class="t1"> Miley Cyrus performing in Kosovo</p>
                <p class="text">We believe we achieved this on our very first edition, with performances from Dua Lipa,
                    Action Bronson, and Martin Garrix who will always be part of our history as the first ever Sunny
                    Hill Festival Headliners </p>
            </div>
            <div>
                <img src="images/sunnyhill5.jpg" alt="fotot">
                <p class="t1"> It's all about having fun... and seeing stars </p>
                <p class="text">From New York to London, from Milan to Sao Paulo and New Delhi to Los Angeles, Sunny
                    Hill Festival was a sensation everyone from all corners of the world was talking about and an event
                    that thousands and thousands wanted to experience. </p>
            </div>
            <div>
                <img src="images/sunnyhill6.jpg" alt="fotot">
                <p class="t1"> GASHI performing for the first time at Sunny Hill Festival</p>

                <p class="text">Listen to one of the songs of GASHI...</p>
                <div id="div3">

                    <audio width="336" height="69" controls>
                        <source src="images/sunnyhill2.mp3" type="audio/mp3">
                        Your browser does not support the video tag.
                    </audio>
                </div>
                <p class="text">Sunny Hill Festival is an international music festival of the highest standards, one
                    that puts Prishtina on the festival map as a not-to-be-missed cultural place, in a country that
                    loves music and knows how to have fun. </p>
            </div>
            <div>
                <img src="images/sunnyhill7.jpg" alt="fotot">
                <p class="t1"> Live emotions that you never had before</p>
                <p class="text">In the end, more than 50 thousand people did (unfortunately, the location could not
                    handle more than that) In the second edition of Sunny Hill, we want to break our own records, by
                    making the greatest music event in the region. </p>
            </div>
            <div>
                <img src="images/sunnyhill8.jpg" alt="fotot">
                <p class="t1"> Every year here for you</p>
                <p class="text">And yes, you are invited. </p>
            </div>
        </div>

        <div id="suni">
            <h3>Pri Film Fast</h3>
            <div>
                <img src="images/filmfest3.jpg" alt="fotot">
                <p class="t1"> Prishtina International Film Festival</p>
                <p class="text">Prishtina International Film Festival (PriFest) is a feature film festival set in the
                    youngest country in the Balkans, Kosovo, namely in its capital Pristina. It was founded in 2008, and
                    this year it holds its 11th edition. </p>
            </div>
            <div>
                <img src="images/filmfest4.jpg" alt="fotot">
                <p class="t1"> Trendy and affordable clubs and bars</p>
                <p class="text">Prishtina International Film Festival is the most important film event that is held in
                    Kosovo. Vanessa Redgrave is one of the festival’s dearest friends. She supported the first edition
                    by attending and leading the opening ceremony. She is the president of the Honorary Board of the
                    Festival and supports the festival by promoting it in various international circles. </p>
            </div>
            <div>
                <img src="images/filmfest5.jpg" alt="fotot">
                <p class="t1"> Afterparties program</p>
                <p class="text">The festival consists of four competition programs: the European film competition
                    program, the Balkan film competition program (also known as Honey and Blood Cinema), the
                    Middle-length competition program (comprised of 25-60 min length films) and as of this year, the
                    Documentary film program will also be competitive. The latter promotes documentaries from around the
                    world that revolve around subjects related to human rights and the environment. </p>
            </div>
            <div>
                <img src="images/filmfest6.jpg" alt="fotot">
                <p class="t1"> Afterparties programs</p>
                <p class="text"> All of the above-mentioned programs are open to the whole world. PriFest also has
                    non-competitive programs, like the Focus program, which promotes cinematography of a specific
                    country or director, and the Let It Be program, which is a result of cooperation with Outfest LA, an
                    LGBTI film festival. </p>
            </div>
            <div>
                <img src="images/filmfest7.jpg" alt="fotot">
                <p class="t1"> Best selection of local and international electronic music artists</p>
                <p class="text">This program aims to raise awareness and promote tolerance towards the LGBTI community
                    in Kosovo by offering more knowledge, information and understanding through cinema and feature
                    films. The festival is honored to have the programmers of Outfest LA as curators of this program.
                    Last but not least is the The Special Screenings program, which promotes winners of prestigious
                    festivals like Cannes FF, Berlinale, Toronto, Venice or Oscar winners, giving the Kosovar audience
                    the unique opportunity to see art house films from around the world.</p>
            </div>
            <div>
                <img src="images/filmfest8.jpg" alt="fotot">
                <p class="t1"> Best selection of local and international alternative rock music bands</p>
                <p class="text">We prioritize our afterparties program with only the very best selection of local and
                    international electronic music artists, as well as alternative rock music bands. You will find
                    yourself enjoying the evenings in good company, at trendy and affordable clubs and bars. If you’re
                    feeling rather adventurous, you can join excursions organized by the festival around Kosovo to
                    experience the country’s beautiful landscape and nature, visit cultural heritage monuments and try
                    delicious traditional dishes. </p>
            </div>
            <div>
                <img src="images/filmfest9.jpg" alt="fotot">
                <p class="t1"> Good company</p>
                <p class="text">In 2015, Prishtina International Film Festival suffered an interruption in the form of
                    drastic funding cuts by the newly appointed Minister of Culture. This forced the Prishtina
                    International Film Festival management to make the decision to rebel and protest by taking the
                    festival to Tirana, Albania, and holding a special edition there, in exile, without budget. The echo
                    of this action spread widely and gained the festival great support from the regional, European and
                    world film industries </p>
            </div>
            <div>
                <img src="images/filmfest10.jpg" alt="fotot">
                <p class="t1"> Every year here for you</p>
                <p class="text">Prishtina International Film Festival came back home last year with a very strong
                    edition, expanding in many aspects. This year we certainly do not plan to do less, therefore we need
                    your support to show the importance of this event for the development of film industry and for
                    supporting young talents in a small country like Kosovo. <br> <br>

                    We hope you join this year!</p>
            </div>
        </div>

        <div id="sunii">
            <h3>The Lily of Prizren</h3>
            <div>
                <img src="images/zambaku1.jpg" alt="fotot">
                <p class="t1"> Proud tradition of old ‘citizen songs’</p>
                <p class="text">Zambaku i Prizrenit (The Lily of Prizren), was founded in 1986 from cultural
                    institutions of Kosovo of that time, as the only cultural event that cultivates the urban music
                    genre, such as ballads and serenades</p>
            </div>
            <div>
                <img src="images/zambaku2.jpg" alt="fotot">
                <p class="t1"> Traditional music</p>
                <p class="text">This festival focuses more on the traditional Albanian songs, but some editions have
                    also had performances by other ethnic groups from Kosovo.</p>
            </div>
            <div>
                <img src="images/zambaku3.jpg" alt="fotot">
                <p class="t1"> Prizren celebrates its great musical legacy every June/July</p>
                <p class="text">Zambaku i Prizrenit (Lily of Prizren) is a
                    traditional song festival which is organized
                    during the first week of July. </p>
            </div>
            <div>
                <img src="images/zambaku4.jpg" alt="fotot">
                <p class="t1"> More intricate composition, rhythms and different topics.</p>
                <p class="text">In Prizren traditionally is organized
                    a song festival “Zambaku i Prizrenit” (Lily of
                    Prizren), which is the only one that cultivates
                    old citizen songs. </p>
            </div>
            <div>
                <img src="images/zambaku5.jpg" alt="fotot">
                <p class="t1"> Every year here for you</p>
                <p class="text">Prizren celebrates its great
                    musical legacy every June/July with the unique Zambaku i
                    Prizrenit (Lily of Prizren) festival, held at the open air Lumbardhi cinema.</p>
            </div>
            <div>
                <img src="images/zambaku6.jpg" alt="fotot">
                <p class="t1"> Every year here for you</p>
                <p class="text">Although the festival focuses on Albanianlanguage songs, some editions also have
                    performances by
                    other ethnic groups from Kosovo. At the festival it’s not just
                    old material that is performed - each year new artists add
                    songs to Prizren’s repertoire.</p>
            </div>
        </div>

        <div id="kosova">
            <h3>17 February</h3>
            <div>
                <img src="images/kosova1.jpg" alt="fotot">
                <p class="t1">Independence Day</p>
                <p class="text">Kosovo declared independence from Serbia on Sunday, February 17, 2008, sending tens of
                    thousands of ethnic Albanians streaming through the streets to celebrate what they hoped was the end
                    of a long and bloody struggle for national self-determination</p>
            </div>
            <div>
                <img src="images/kosova4.jpg" alt="fotot">
                <p class="t1"> Kosovo National Team</p>
                <p class="text">Manned mostly with young players from Kosovo's diaspora, the team is a powerful symbol
                    of the 1.8 million Kosovars' campaign for respect abroad, due in part to the importance that
                    Pristina has long attached to sports and culture to buttress its efforts for international
                    recognition.</p>
            </div>
            <div>
                <img src="images/kosova7.png" alt="fotot">
                <p class="t1">Kosovo Flag</p>
                <p class="text">The flag displays six white stars in an arc above a golden map of Kosovo on a blue
                    field. They are officially meant to symbolize Kosovo's six major ethnic groups: Albanians, Serbs,
                    Turks, Gorani, Roma and Bosniaks.</p>
            </div>
            <div>
                <img src="images/kosova.jpg" alt="fotot">
                <p class="t1"> Kosovo National Team</p>
                <p class="text">Kosovo were admitted as members of UEFA and subsequently FIFA in 2016</p>
            </div>
            <div>
                <img src="images/kosova2.jpg" alt="fotot">
                <p class="t1"> Kosovo Army</p>
                <p class="text">The KSF will for the first time this year overtake the capital's squares with a new
                    military mission.
                    Force Day will be an open day where citizens will be able to see closely their army with new
                    mandates. It will also present new emblems for the KSF units.</p>
            </div>
            <div>
                <img src="images/kosova8.jpg" alt="fotot">
                <p class="t1"> NEWBORN</p>
                <p class="text"> Among other ways to portray such a celebration, Fisnik Ismajli designed the sculpture
                    “NEWBORN” which now serves as a touristic attraction and a way of learning more about Kosovo’s
                    endeavor towards its independence.
                    More than that, NEWBORN is an emotional monument whose design is prone to constant changes on yearly
                    bases. It serves as a mean to interpret the current issues that our society in Kosovo faces and the
                    message we want to convey to the international community.</p>
            </div>
        </div>
        <div id="prite">
            <h3 id="nshesh">Prite n'Shesh</h3>
            <div>
                <img src="images/prite1.jpg" alt="fotot">
                <p class="t1"> Magic moments</p>
                <p class="text">This year's 'Cut to the Square' has not only been one night as it was in previous years,
                    but has been full of 27 nights.</p>
            </div>
            <div>
                <img src="images/prite2.jpg" alt="fotot">
                <p class="t1"> Come with your friends</p>
                <p class="text">We have started since December 4th to continue until December 31 and January 1. Until
                    January 1, there will be a musical performance. </p>
            </div>
            <div>
                <img src="images/prite3.jpg" alt="fotot">
                <p class="t1"> Listen to music</p>
                <p class="text">Plus there were two areas where every night there were bands and different artists
                    performing… </p>
            </div>
            <div>
                <img src="images/prite4.jpg" alt="fotot">
                <p class="t1"> Lights everywhere</p>
                <p class="text">Through cultural activities and such activities we reach an awareness of different
                    generations and are very important, well worth a little past good times outside the house too</p>
            </div>
            <div>
                <img src="images/prite5.jpg" alt="fotot">
                <p class="t1"> Creativity</p>
                <p class="text">At the beginning of the square, old English music accompanies the dances of visitors
                    coming from different cities of Kosovo and beyond.</p>
            </div>
            <div>
                <img src="images/prite6.jpg" alt="fotot">
                <p class="t1"> The most beautiful time</p>
                <p class="text">Under the tune of old city songs, young and old are enjoying the festive warmth in
                    Pristina Square.</p>
            </div>

            <div id="vere">
                <img id="veree" src="images/prite9.jpg" alt="fotot">
                <p class="t1"> Vere n'Dimen</p>
                <p class="text">Year-end holidays are making even the best small wooden houses located in Zahir Pajaziti
                    Square in Pristina. These houses where citizens can spend their time and serve hot drinks are
                    staying open daily from morning till midnight, in the framework of "Vere n'Dimen" activity</p>
            </div>
            <div>
                <img src="images/prite8.jpg" alt="fotot">
                <p class="t1"> New year is comming</p>
                <p class="text">Among many, children are enjoying the magic of this winter the most. Beards are the ones
                    who bring smiles to the faces of little angels. This festive atmosphere is followed every night with
                    live music by various singers and bands.</p>
            </div>
        </div>
        <div id="doku">
            <h3>DOKUTECH</h3>
            <div>
                <img src="images/doku1.jpg" alt="fotot">
                <p class="t1"> </p>
                <p class="text">DOKU.TECH 2019 | Digitizing the Human, Humanizing the Digital</p>
            </div>
            <div>
                <img src="images/doku3.jpg" alt="fotot">
                <p class="t1"> </p>
                <p class="text">DOKU.TECH is an annual event bringing together individuals and tech talents with
                    top-tier international future makers, executives, and thinkers. </p>
            </div>
            <div>
                <img src="images/doku2.jpg" alt="fotot">
                <p class="t1"> </p>
                <p class="text">This conference explores and challenges the social implications of technological
                    innovations through connectivity, content, masterclasses, workshops, and openness while inspiring
                    youngsters by sharing knowledge and experiences.</p>
            </div>

            <div>
                <img src="images/doku4.jpg" alt="fotot">
                <p class="t1"> Every year here for you</p>
                <p class="text">In 2019, DOKU.TECH, tackles these issues and more surrounding the ever growing struggle
                    between humanity and digitalization</p>
            </div>
            <div>
                <img src="images/doku7.jpg" alt="fotot">
                <p class="t1"></p>
                <p class="text">Our speakers on the main stage will discuss: Ownership, Autonomy, Independence,
                    Interconnection, Privacy, and Security.</p>
            </div>
            <div>
                <img src="images/doku5.jpg" alt="fotot">
                <p class="t1"></p>
                <p class="text">What’s the best way to wrap up an amazing day you ask? Food, music, drinks, awesome
                    weather and amazing people of course.</p>
            </div>
            <div>
                <img src="images/doku6.jpg" alt="fotot">
                <p class="t1"></p>
                <p class="text">Humanizing the digital, digitizing the human, the outstanding tech conference which will
                    be held at the well known youth transformed building</p>
            </div>
        </div>
        <div id="lidhja">
            <h3>Lidhja e Prizrenit</h3>
            <div>
                <img src="images/lidhja1.jpg" alt="fotot">
                <p class="t1">Environmental value</p>
                <p class="text">The Prizren League building is located within the Gazi Mehmed Pasha Complex,
                    respectively within the Albanian Prizren League Complex. The complex of the Albanian League of
                    Prizren, as a spatially urban-architectural unit, is located in the old core of the city and has
                    special cultural-historical, social and environmental value. The building of the League of Prizren
                    has rectangular layout, it is formed on the ground floor and the floor.</p>
            </div>
            <div>
                <img src="images/lidhja2.jpg" alt="fotot">
                <p class="t1"> Social value </p>
                <p class="text">The floor is console-shaped to the east façade. The facade treatment is linear, with
                    some rectangular openings and four aquatic roofs. The Prizren League building originally served as a
                    classroom for the Gazi Mehmed Pasha complex. In 1878 until 1881 this building was used as the
                    administrative office of the Albanian League of Prizren.</p>
            </div>
            <div>
                <img src="images/lidhja3.jpg" alt="fotot">
                <p class="t1"> Cultural-historical value</p>
                <p class="text">During the century. XX this building was used as living space. In 1968 the building was
                    dislocated a few meters to the west due to road construction. The years 1976-1978 mark the
                    restoration and revitalization interventions where, in honor of the 100th anniversary, the building
                    becomes part of the Museum Complex of the Albanian League of Prizren. In March 1999 the facility was
                    completely destroyed by Serbian paramilitaries and a park was formed there. Immediately after June
                    1999, work began on the design and reconstruction of this important historical icon for the history
                    of the Albanian people. The works were completed on June 10, 2000. In 2003, the courtyard of the
                    complex of the Albanian League of Prizren was redesigned, and it serves as a Historical Museum. The
                    historical museum exhibits exhibits that tell the story of the development of political events
                    during the period 1878 - 1881.</p>
            </div>

        </div>
        <div id="xhamia">
            <h3>Mosque of Sinan Pasha</h3>
            <div>
                <img src="images/xhamia.jpg" alt="fotot">
                <p class="t1">The Sinan Pasha Mosque represents one of the most characteristic monuments of Prizren.</p>
                <p class="text">The Sinan Pasha Mosque is located in the Historic Zone of Prizren city. It was built in
                    1615 by Sophie Sinan Pasha - a prominent person, a man of knowledge, with an important position in
                    the Ottoman administration. </p>
            </div>
            <div>
                <img src="images/xhamia1.jpg" alt="fotot">
                <p class="t1">The mosque is covered with a 42.5 m wide dome.</p>
                <p class="text">With its dominant position, dimensions, shape, proportion of the minaret to the dome,
                    materials and construction techniques, rich interior decorations, the Sinan Pasha Mosque represents
                    one of the most characteristic monuments of Prizren. The mosque is set on a raised plinth where
                    access from the road is to the north via stone carved stairs. It has a square layout with a niche in
                    the south-east that makes the mosque more specific compared to other mosques in Kosovo.</p>
            </div>
            <div>
                <img src="images/xhamia3.jpg" alt="fotot">
                <p class="t1">The mosque served religious needs until 1912</p>
                <p class="text">
                    It is built of hewn river stones, bound with limestone, while on the outside it is covered with
                    carved stones (which are supposed to have been taken from the ruins of the Archangel Monastery). The
                    mosque minaret is made of paving stones (square), square base and circular trunk. At the top is a
                    sheriff. In front of the entrance to the mosque is an open, stone-built porch. The porch has three
                    domed domes that rest on circular stone pillars. The mosque is covered with a 42.5 m wide dome. The
                    interior is a unique space, illuminated by tiered windows, with domes painted in three-phase floral
                    motifs.
                </p>
            </div>
        </div>
        <div id="muzeu">
            <h3>National Museum of Kosova</h3>
            <div>
                <img src="images/muzeu1.jpg" alt="fotot">
                <p class="t1"> Archaeological sector, Ethnological sector</p>
                <p class="text">Kosovo Museum (Albanian: Muzeu i Kosovës) is the
                    National Museum of Kosovo[a], located in the city of Pristina.It was founded in 1949 and
                    is the largest museum in Kosovo. However, the building of the museum was constructed in 1889 and it
                    was designed according to the Austro-Hungarian style of construction and its real aim was
                    establishing the high military command of that time. </p>
            </div>
            <div>
                <img src="images/muzeu2.jpg" alt="fotot">
                <p class="t1">Historic sector</p>
                <p class="text">The Museum is the earliest institution of cultural heritage in Kosovo, established with
                    the goal of preserving, restoration-conservation and presentation of movable heritage on the
                    territory. It is situated in a special facility, from an architectural point of view but also
                    because of its location since it is situated at the old nucleus of the city centre. </p>
            </div>
            <div>
                <img src="images/muzeu.jpg" alt="fotot">
                <p class="t1">Natural sector</p>
                <p class="text"> Founded in 1949, the Kosovo Museum has departments of archaeology, ethnography, and
                    natural science, to which a department for the study of history and the National Liberation Struggle
                    was added in 1959. It has been active in sponsoring archaeological excavations, conservation and
                    other scientific work. Since 1956 it has published an annual journal called Buletin i Muzeut të
                    Kosovës, with articles in Albanian</p>
            </div>
        </div>
        <div id="prishtina">
            <h3>Famous restaurants in Prishtina</h3>
            <div>
                <img src="images/greco.jpg" alt="fotot">
                <p class="t1">Restaurant El Greco</p>
                <p class="text">Traditional Greek cuisine with Greek chef in downtown Pristina.
                    Greek cuisine with Greek chef in Prishtina city center. Restaurant "EL GRECO" with its chefs with
                    over 25 years of experience in Germany comes to Kosovo. It is a Kosovoaro-Greek investment of two
                    gastronomes that prioritize the quality and satisfaction of guests. "EL GRECO" brings you
                    traditional Greek cuisine, Greek wine and the famous OUZO</p>
            </div>
            <div>
                <img src="images/gresa.jpg" alt="fotot">
                <p class="t1">Princesha Gresa Restaurant </p>
                <p class="text">Princesha Gresa Restaurant is known as one of the first International restaurants in
                    Kosovo starting its work since 1999</p>
            </div>
            <div>
                <img src="images/liburnia.jpg" alt="fotot">
                <p class="t1">Restaurant Liburnia</p>
                <p class="text">Family-friendly restaurant · Eastern European restaurant</p>
            </div>
        </div>
        <div id="prizreni">
            <h3>Famous restaurants in Prizren</h3>
            <div>
                <img src="images/tiffany.jpg" alt="fotot">
                <p class="t1">Tiffany Restaurant</p>
                <p class="text">Family-friendly restaurant · Eastern European restaurant</p>
            </div>
            <div>
                <img src="images/beska.jpg" alt="fotot">
                <p class="t1">Restorant Besimi - Beska</p>
                <p class="text">Family-friendly restaurant · Eastern European restaurant</p>
            </div>
            <div>
                <img src="images/villa.jpg" alt="fotot">
                <p class="t1">Villa Park Restaurant</p>
                <p class="text">
                    Vila Park is a family-run restaurant located 12 km from Prizren-Prevalla. Professional kitchen and
                    service. Welcome. Family-friendly restaurant · Eastern European restaurant</p>
            </div>
        </div>
        <div id="peja">
            <h3>Famous restaurants in Peja</h3>
            <div>
                <img src="images/duka.jpg" alt="fotot">
                <p class="t1">Dukagjini Hotel</p>
                <p class="text">Following the most ambitious hotel restoration in Kosova’s history, Dukagjini Hotel, as
                    part of Dukagjini Group, once again takes its place at the heart of Peja.
                    An icon since 1956, Dukagjini Hotel has always been recognized as one of leading hotels in Kosova.
                    The hotel seamlessly blends elements of the original and the new while the stunning new interiors
                    sparkle with timeless elegance and glamour.</p>
            </div>
            <div>
                <img src="images/kulla.jpg" alt="fotot">
                <p class="t1">Zenel Bey Tower</p>
                <p class="text"> Peja has been known as a settlement since ancient times, where it was continuously
                    lived and
                    created. To this day, there have been many religious and secular creations and monuments of
                    monumental value from local craftsmen and artists.</p>
            </div>
            <div>
                <img src="images/trofta.jpg" alt="fotot">
                <p class="t1">Trofta e Drinit</p>
                <p class="text">Trofta e Drinit is a family-run restaurant located 12 km from Prizren-Prevalla.
                    Professional kitchen and
                    service. Welcome. Family-friendly restaurant · Eastern European restaurant</p>
            </div>
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