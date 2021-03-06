<?php session_start();?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/headerFooter.css" />
    <link rel="stylesheet" type="text/css" href="css/about-page.css" />
    <link rel="icon" href="images/flag.jpg">
    <title>About Kosovo</title>
    <script src="js/nav.js"></script>
</head>

<body onload="navActive('about1')">
    <div class="wrapper" BGCOLOR="&{favorite_color();};">
        <div id='blur'>
        </div>
        <header id="entrance1">
               
            <p>Kosovo</p>
           <nav>
                <ul>
                    <li><a href="index.php" id="home">HOME</a></li>
                    <li><a href="About.php" id="about1">ABOUT</a></li>
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="Places.php">PLACES</a></li>
                    <li><a href="Services.php">SERVICES</a></li>
                     <?php if(!isset($_SESSION["loggedin"])){?>
                        
                    <li><a href="login.php">Log in</a></li><?php } else {?>
                    <li><a href="logout.php">Log out</a></li><?php }?></li>
                </ul>
            </nav>
        
            <h1 style=" -webkit-text-stroke: 1px darkblue;">WELCOME TO KOSOVO</h1>
            <h3>OFFICIAL STATE OF KOSOVA VACATION AND TRAVEL INFORMATION WEBSITE</h3>
        </header>
        <article id='about'>
            <h1 id="tx" >Kosovo the land of hospitality
            </h1>
           
            <p>As a young and attractive country, Kosovo has a very rich culture and history. Kosovo Cultural Heritage
                was created by ancients Illyrians and Romans with later indications by different empires in more recent
                centuries. When traveling around Kosovo, there are many opportunities to experience the very old
                civilization, unique culture, and distinctive traditions which are documented in archeological parks,
                natural parks, galleries, tower houses (Kullas) in other words strongholds, religious monuments, and
                museums.</p>
            <a target="_blank" href="http://www.beinkosovo.com/kosovo-culture/"><button>Read more</button></a>
        </article>
        <article id="culture">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <h1>Clothing</h1>
                            <p>Traditional clothing in Kosovo is characterized by its uniqueness and its Illyrian
                                motives even though resembles with Albanian traditional clothing. There are over 200
                                different kinds of clothing and styles of wearing the clothes all depending where you
                                are from, the history of your Fis (clan), and many more reasons.<br><br>
                                As for present day clothing – there isn’t much difference in Kosovo fashion from any
                                westernized country. There are many famous fashion designers from Kosovo and among them
                                is Blerina Kllokoqi Rugova who participated in “Oscars 2015” and who took care for the
                                musician and producer Jon Mack, Jane Harman (2012) etc. </p>
                        </td>
                        <td><picture>
                                <source media="(min-width: 1150px)" srcset="images/clothing.jpg">
                                <source media="(min-width: 465px)" srcset="images/clothing2.jpg">
                                <img src="images/clothing.jpg" alt="Flowers" style="width:auto;">
                              </picture>

                        
                                
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="images/biblo.jpg" alt="g"></td>
                        <td>
                            <h1>Architecture</h1>
                            <p>Kosovo has a very old architecture which dates from Neolithic Period and includes periods
                                or ages of Copper, Bronze, Iron, Antiquity and Medieval. The presence of different
                                civilizations during these periods is recognized in various structures which survived
                                until now.<br><br>
                                An indigenous Islamic tradition is a practice in which Kosovo has been home to for over
                                600 years due to its wealthy archeological heritage consisting of various mosques,
                                tekkes (brotherhoods), Islamic libraries, medreses (theological schools), bazaars,
                                hamams (Turkish baths), and such. Those traditions as a part of the Kosovar heritage
                                have suffered substantial damages as a result of the latest conflict. Besides those of
                                the Kosovo culture, there are other architectural monuments remaining in those areas
                                where minorities rest. Most importantly, are the Serbian Orthodox churches and monetary
                                that still stand strong in the most important areas of Kosovo.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1>Food</h1>
                            <p>
                                The cuisine of Kosovo compatibly matches with the area’s continental climate. The Kosovar daily cuisine consisting of various pies and an assortment of meat, coordinates well with the hot summers and cold winters it possesses. 
                                As a result of its continuous history involved with conflict and invasion, the cuisine of Kosovo has been developed consisting of dishes from various nationalities such as: Albanian, Serbian, Turkish, Greek, Croatian, Italian, and more.
                                Finally, the key meals of Kosovo are burek, pies, kebab, sausages, stuffed peppers, lamb, beans, sarma’s, and many more.
                                Last but not least, the kebabs with the complementary round bread known as samun are grilled perfectly and served with roast pepper, tomato, cabbage, cucumber, and cottage cheese which you will find completely irresistible. 
                            </p>
                        </td>
                        <td><img src="images/fli.jpg" alt="f"></td>
                    </tr>
                </tbody>
            </table>
        </article>
        <aside>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d752311.6037919457!2d20.3416435869496!3d42.56129743855055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13537af354bf7df1%3A0xbfffeedfabc31791!2sKosovo!5e0!3m2!1sen!2s!4v1577743552934!5m2!1sen!2s"
                 width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                 -->
                 <div style="display: inline-block;width: 450px;height: 450px; vertical-align: middle;" id="map">
                </div>
            <div id="details">
                <h2 id="check" >Republic of Kosovo</h2>
                <form action="cities.php">
                    <label for="cities"><b>Select City</b></label>
                    <select id="cities" type="text" name="cities" style="padding:5px 15px;margin-left:3%" onclick="changeMap()">
                    <?php
                        $city = array("Prishtine"=>"2", "Prizren"=>"3", "Gjakove"=>"4",
                        "Peje"=>"5", "Gjilan"=>"6", "Mitrovice"=>"7","Lipjan"=>"9");
                        ksort($city);

                        foreach($city as $x => $x_value) {
                            echo  "<option value='".$x_value."'>".$x."</option>";
                        }
                    ?>
                    </select>
                </form>
                <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                    $('#cities').on("change", function(){
                        /* Get input value on change */

                        var inputVal = $(this).val();
                        console.log(inputVal);
                        var resultDropdown = $(".info");
                        if(inputVal){
                            $.get("cities.php", {term: inputVal}).done(function(data){
                                // Display the returned data in browser
                                resultDropdown.html(data);
                            });
                        } else{
                            resultDropdown.empty();
                        }
                    });
                    
                
                });
                </script>
                    <div class="info">
                    <p><strong>Area: </strong> <em>10,887</em></p>
                    <p><strong>Population: </strong> <em>1.9 million</em></p>
                    <p><strong>Located: </strong> <em>South-Eastern Europe</em></p>
                    <p><strong>Capital City: </strong> <em>Prishtina</em></p>
                    <p><strong>Nationality: </strong> <em>Kosovar</em></p>
                    <p><strong>Valute: </strong> <em>Euro </em></p>
                    <p><strong>Language: </strong> <em>Albanian </em></p>
                    </div>
            </div>
        </aside>
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
                    <p class="aligner"> <span class="greenText"><a href="#">@EUKosovo </a></span> EU Office/EU Special Representative in Kosovo play the pivotal role in 
                    realising the European agenda for Kosovo with the aim to support its European path.</p>
                    <p class="aligner"> <span class="greenText"><a href="#">@kenethhandresen </a></span> A rare, 100 year old postcard from Gjakova in Kosovo. It is poststamped 
                        both in Prizren and Gjakova and was sent to a woman in Zagreb (Croatia) on April 17, 1920 . #Kosovo #postcard</p>
                </div>
                <div class="footerDivs" id="contact">
                    <p class="divHeader">Contact Us</p>
                    <form method="post" action="" id="form2">
                        <input type="text" name="name" placeholder="Full Name" class="required"/>
                        <input type="text" name="email" placeholder="Email Address" class="required"/>
                        <input type="text" name="subject" placeholder="Subject" class="required"/>
                        <textarea name="message" rows="4" cols="25" placeholder="Message"></textarea>
                        <input type="submit" value="SUBMIT"/>
                    </form>
                    
                </div>
            </div>
            <p>Copyright &COPY; 2013 Domain Name <span style="float:right">Template by OS Templates</span></p>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/geo.js"></script> 
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPvs2MZNfRqUqOcLPsSo6f1GXOGv9MW7M&callback=initMap">
    </script>
    <script src="js/contactval.js"></script>
</body>
</html>