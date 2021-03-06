<?php session_start();?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>What to visit?</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/headerFooter.css" />
    <link rel="stylesheet" type="text/css" href="css/places.css" />
    <link rel="icon" href="images/flag.jpg">    
    <script src="js/places.js"></script>
    <script src="js/nav.js"></script>
</head>

<body onload="navActive('places')">

    <div id="blur"></div>
    <div class="wrapper">

        <header id="entrance">
            <p>Kosovo</p>
      <nav>
                <ul>
                    <li><a href="index.php" id="home">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="Places.php" id="places">PLACES</a></li>
                    <li><a href="Services.php">SERVICES</a></li>
                     <?php if(!isset($_SESSION["loggedin"])){?>
                        
                    <li><a href="login.php">Log in</a></li><?php } else {?>
                    <li><a href="logout.php">Log out</a></li><?php }?></li>
                </ul>
            </nav>
            <h1>No sea?! No problem</h1>
            <h3>There are still plenty of places you can visit...</h3>
        </header>
        <main id="main">
            <article>

                <h1 align="center" id="V"> Where to go?</h1>
                <a onclick="showDivs(-1)" id="leftArrow"><span> &lt;</span></a>
                <a onclick="showDivs(1)" id="rightArrow"><span> &gt;</span></a>
                <div id="slider">
                    <nav>
                        <ul>
                        <?php
                        require_once "config.php";
                        $count=0;
                    $sql ="SELECT  name,logo FROM places";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<li>
                            <a href='#story'"."onclick='showStory(".$count.")'>
                                <div class='images'>
                                    <img src=".$row["logo"].">
                                    <p>".$row["name"]."</p>
                                </div>
                            </a>
                        </li>";
                       $count=++$count; }
                    } else {
                        echo "No hotels";
                    }
                    
                    $conn->close();
                ?>
                            


                        </ul>
                    </nav>




                </div>

            </article>

            <article id="story">
                <div class="readMore hidden">

                    <div class="story short">
                        <figure>
                            <img src="images/places/germia3.jpg" alt="kosovo.jpg" class="miniSlideShow fotot" width="360px"
                                height="500px" />


                            <div style="margin-left: 35%;">
                                <span class="dot blueDot" onclick="showNextPicture(0,0,0)" onload="test()"></span>
                                <span class="dot" onclick="showNextPicture(0,1,0)"></span>
                                <span class="dot" onclick="showNextPicture(0,2,0)"></span>
                                <span class="dot" onclick="showNextPicture(0,3,0)"></span>
                            </div>
                            <figcaption>
                                <h2>G&Eumlrmia national park</h2>
                                <h3><i>A cool place to spend a Sunday</i></h3>
                                <h4><mark>Prishtina</mark></h4>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="story long">
                        <h2><u>History:</u></h2>
                        <p><b>G&eumlrmia national park</b> is a park located in the north-east of <abbr
                                title="Kosova">KS</abbr>'s capital city Prishtina. It is a part of the Rhodope
                            Mountains, which
                            connect Kosova and Macedonia. Since 1987 the municipality of Prishtina took it under
                            protection. </p>
                        <h2><u>What can you do there</u></h2>
                        <p id="columnPurpose">G&eumlrmia National Park is one of the people's favorite place to spend a day off, especially
                            in the summer weekends. This comes as a result of
                            the nature and the air purity there, among several activities that the park provides.
                            Starting from the big space, in which you can organize
                            picnics, and a variety of games for everyone, no matter the age differences. Moving on to
                            the children's playgrounds, and restaurants for the
                            parents to relax. Also there are several Volleyball, Basketball and Football fields in which
                            sometimes are organized events. Summer is the
                            best season to visit this park, because of Germia Swimming Pool. And, last but not least, if
                            you came for experimental purposes (Biology),
                            Germia is the place with the richest fauna in Kosova. As you can see, there is no one that
                            can't enjoy that place. </p>
                        <div class="activities">
                            <p>So the activities you can do there are:</p>
                            <ul>
                                <li>Playground</li>
                                <li>Walking</li>
                                <li>Running</li>
                                <li>Volleyball</li>
                                <li>Basketball</li>
                                <li>Football</li>
                                <li>Food and Drink</li>
                                <li>Swimming</li>
                                <li>Photographies</li>
                                <li>Surrounded by nature</li>

                            </ul>
                        </div>
                        <div class="tables">
                            <table>
                                <caption><b><i><u>Facts:</u></i></b></caption>
                                <tbody>
                                    <tr>
                                        <th>City</td>
                                        <td>Prishtin&euml;</td>
                                    </tr>
                                    <tr>
                                        <th>Municipality</td>
                                        <td>Prishtin&euml;</td>
                                    </tr>
                                    <tr>
                                        <th>Street</td>
                                        <td>"Rr. Dr. Shp&euml;tim Robaj"</td>
                                    </tr>
                                    <tr>
                                        <th>Postal Code</td>
                                        <td>10000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="readMore hidden">
                    <div class="story short">
                        <figure>
                            <img src="images/places/kalaja1.jpg" alt="kosovo.jpg" class="miniSlideShow fotot" width="360px"
                                height="500px" />


                            <div style="margin-left: 35%;">
                                <span class="dot blueDot" onclick="showNextPicture(1,0,0)"></span>
                                <span class="dot" onclick="showNextPicture(1,1,0)"></span>
                                <span class="dot" onclick="showNextPicture(1,2,0)"></span>
                                <span class="dot" onclick="showNextPicture(1,3,0)"></span>
                            </div>
                            <figcaption>
                                <h2>Prizren's Castle</h2>
                                <h3><i>A cool place to explore</i></h3>
                                <h4><mark>Prizren</mark></h4>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="story long">
                        <h2>History:</h2>
                        <p><b><a href="https://dtk.rks-gov.net/tkk_objekti.aspx?id=6229" target="_blank"> Prizren
                                    Fortress</a></b> is a cultural heritage monument in Prizren , Kosovo
                            , considered to be a symbol of the city and an important element in Kosovo's cultural
                            identity . Built on a high hill, in a picturesque setting and in an
                            extremely strategic position, the Fortress rises above the city as well as over the deep
                            valley of the River Lumbardhi and the plain of Dukagjin.
                            The castle dates back to the first period of civilization of this region,in prehistory, with
                            a continuous development in the Byzantine and Ottoman periods.. </p>
                        <h2>What can you do there</h2>
                        <p>An alleyway from the city center leads to the fortress, taking about 15 minutes' walk, and
                            you can enjoy the full view of the city, take pictures or
                            just watch the sun go down. The city center is also a beautiful place to walk and have a
                            coffe on the bullevard near the river. You can also a historic
                            monument, called <a href="Services.html#lidhja" target="_blank">Lidhja Shqip&euml;tare e Prizrenit</a> located about 5 minutes
                            from the city.
                        </p>
                        <div class="activities">
                            <p>So the benefits are:</p>
                            <ul id="primary">
                                <li>Walking</li>
                                <li>Running</li>
                                <li>Eating:
                                    <ul id="nested">
                                        <li><a href="images/Places/beska.jpg" target="_blank" >Restaurant Besimi - Beska</a></li>
                                        <li><a href="images/Places/hyska.jpg" target="_blank">Restaurant Hyska</a></li>
                                        <li><a href="http://www.tesyla.com/" target="_blank">Restaurant Te Syla</a></li>
                                    </ul>
                                </li>
                                <li>Drinking:
                                    <ol>
                                        <li><a href="images/Places/shadervani.jpg" target="blank">Shad&euml;rvani</a></li>
                                        <li><a href="images/Places/pcsh.jpg" target="blank">Prince Coffee House</a></li>

                                    </ol>
                                </li>
                                <li>Photographies</li>
                                <li>Wonderful view</li>
                                <li>No extra charge for entering</li>

                            </ul>
                        </div>
                        <div class="tables">
                            <table>
                                <caption><b><i><u>Facts:</u></i></b></caption>
                                <tbody>
                                    <tr>
                                        <th>City</td>
                                        <td rowspan="2">Prizren</td>
                                    </tr>
                                    <tr>
                                        <th>Municipality</td>

                                    </tr>
                                    <tr>
                                        <th>Street</td>
                                        <td>"Kalaja"</td>
                                    </tr>
                                    <tr>
                                        <th>Postal Code</td>
                                        <td>20000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="readMore hidden">
                    <div class="story short">
                        <figure>
                            <img src="images/places/mirusha1.jpg" alt="kosovo.jpg" class="miniSlideShow fotot" width="360px"
                                height="500px" />

                            <div style="margin-left: 35%;">
                                <span class="dot blueDot" onclick="showNextPicture(2,0,0)" onload="test()"></span>
                                <span class="dot" onclick="showNextPicture(2,1,0)"></span>
                                <span class="dot" onclick="showNextPicture(2,2,0)"></span>
                                <span class="dot" onclick="showNextPicture(2,3,0)"></span>
                            </div>
                            <figcaption>
                                <h2>Mirusha Waterfalls</h2>
                                <h3><i>A cool natural phenomenon</i></h3>
                                <h4><mark>Malisheva</mark></h4>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="story long">
                        <h2>History:</h2>
                        <p><b><a href="https://turizemsite.wordpress.com/2017/06/02/first-blog-post/">Mirusha
                                    Waterfalls</a></b> is located in the village of Llapcevo in Malisheva Municipality.
                            Mirusha Canyon is one of the most interesting areas
                            of Kosovo's nature. The Mirusha River at the bottom of its course runs through a gorge known
                            as the Mirusha Canyon. In this part of the canyon
                            there are <mark id="twoMathFunctions">16</mark> lakes waterfalls that make up the most attractive part of the canyon</p>
                        <h2>What is it?</h2>
                        <p>Mirusha Waterfall consist of 13 drops, where the longest drop is 22m.The river has carved a
                            10 kilometres (6 mi) canyon and created 13 lakes
                            with waterfalls between them. The waterfalls are one of the most visited attractions of the
                            area and people often swim there.</p>
                        <div class="activities">
                            <p>So the benefits are:</p>
                            <ul id="primary">
                                <li>Walking</li>
                                <li>Running</li>
                                <li>Photographies</li>
                                <li>Wonderful view</li>
                                <li>No extra charge for entering</li>
                                <li>Fresh air</li>
                                <li>Swimming</li>

                            </ul>
                        </div>
                        <div class="tables">
                            <table id="third">
                                <caption><b><i><u>Facts:</u></i></b></caption>
                                <tbody>
                                    <tr>
                                        <th>City</td>
                                        <td>Gjakov&euml;</td>
                                    </tr>
                                    <tr>
                                        <th>Municipality</td>
                                        <td>Malishev&euml;</td>
                                    </tr>
                                    <tr>
                                        <th>Street</td>
                                        <td>Llap&ccedil;ev&euml;</td>
                                    </tr>
                                    <tr>
                                        <th>Postal Code</td>
                                        <td>10000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="readMore hidden">
                    <div class="story short">
                        <div id="foto">
                            <img src="images/places/drini6.jpg" alt="kosovo.jpg" class="miniSlideShow fotot" />
                        </div>
                        <div id="photos" style="margin-left: 35%;">
                            <span class="dot blueDot" onclick="showNextPicture(3,0,1)"></span>
                            <span class="dot" onclick="showNextPicture(3,1,1)"></span>
                            <span class="dot" onclick="showNextPicture(3,2,1)"></span>
                            <span class="dot" onclick="showNextPicture(3,3,1)"></span>
                        </div>
                        <div id="info">
                            <h2>Drini i Bardh&euml;</h2>
                            <h3>A cool place to visit</h3>
                            <h4>Pej&euml;</h4>
                        </div>
                    </div>
                    <div class="story long">
                        <h2>HISTORY:</h2>
                        <p>The <a href="https://kk.rks-gov.net/peje/turizmi/festat-dhe-aktivitetet/" target="blank">White Drin</a> is a river that crosses the western part of Kosovo , namely
                            the Dukagjini Plain. Drin springs at the foot of
                            Rusolia Mountain from the Radavc cave boulder, at 586 m above sea level, where it also
                            creates a beautiful waterfall before descending to
                            the plateau and joins the town of Kukes with the Black Drin to form the Drin in antiquity is
                            known by the name Drillon. </p>
                        <h2>What can you do there</h2>
                        <p>The Drini i Bardhe spring is one of Kosovo's most important sources and one of the sources
                            that supplies the city of Peja with drinking water.
                            It is worth mentioning that the water of this spring produces the "<a href="http://www.birrapeja.com/?age-verified=4348c425c5&fbclid=IwAR0uDHZMqjKfKk0_qw5QxsJBjrr2e17K4nny-Ey6-UUUNMkcScmme1O2fz4">Beer Peja</a>"
                            known for its high quality.</p>
                        <div class="video activities">
                            <p>So the benefits are:</p>
                            <video width="350" height="200" controls>
                                <source src="images/Drini.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="fourth tables">
                            <table>
                                <caption><b><i><u>Facts:</u></i></b></caption>
                                <tbody>
                                    <tr>
                                        <th>City</td>
                                        <td class="objectPurpose"></td>
                                    </tr>
                                    <tr>
                                        <th>Municipality</td>
                                        <td class="objectPurpose"></td>
                                    </tr>
                                    <tr>
                                        <th>Street</td>
                                        <td class="objectPurpose"> </td>
                                    </tr>
                                    <tr>
                                        <th>Postal Code</td>
                                        <td class="objectPurpose"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="readMore hidden">

                    <div class="story short">
                        <div>
                            <img src="images/places/gadime1.jpg" alt="kosovo.jpg" class="miniSlideShow fotot" />
                        </div>
                        <div id="photos" style="margin-left: 35%;">
                            <span class="dot blueDot" onclick="showNextPicture(4,0,1)"></span>
                            <span class="dot" onclick="showNextPicture(4,1,1)"></span>
                            <span class="dot" onclick="showNextPicture(4,2,1)"></span>
                            <span class="dot" onclick="showNextPicture(4,3,1)"></span>
                        </div>
                        <div id="info">
                            <h2>Gadime Cave</h2>
                            <h3>A cool place to know</h3>
                            <h4>Prishtina</h4>
                        </div>

                    </div>
                    <div class="story long">
                        <h2>History:</h2>
                        <p>The Marble Cave or the <a
                                href="https://www.ammk-rks.net/repository/docs/Informata_per_Shpellen_e_Gadimes.pdf">Gadime
                                Cave</a> (Albanian: Shpella e Mermerit)
                            is a karst limestone cave in the village of Gadime e Ulët in the municipality
                            of Lipljan in Kosovo. Much of it is still unexplored. The cave was found in 1966 by a
                            villager, Ahmet Asllani, who was working on his garden.
                            The entrance to the cave is in two directions. The lower direction is relatively complicated
                            and consists of 3 transverse channels, 2 parallel
                            and curved corridors. The upper direction consists of two combined corridors. The total
                            length of the cave is 1.260 m and its area is 56.25 ha</p>
                        <h2>What can you do there</h2>
                        <p>Persons interested in the interior of the cave and who have apparently tried to get in there
                            have reported that its interior is just as beautiful
                            as what tourists see and perhaps even more beautiful. The cave seems to have some other
                            natural phenomena such as a lake the size of which may
                            be 15 to 25 meters. of the crystal in one cm for <mark id="exponentialNumber">30000</mark> years it follows that the cave is
                            80,000 years old.</p>
                        <div class="activities">
                            <p>In the cave there are many symbols formed by these crystals:</p>
                            <dl>
                                <dt>Fish</dt>
                                <dd style="margin-left: 30px;"><a href="images/Places/gadime7.jpg" target="_blank" style="font-weight:normal"> A Fish formed by
                                        the crystals</a></dd>
                                <dt>Scanderbeg Beard</dt>
                                <dd style="margin-left: 30px;"><a href="images/Places/gadime6.jpg" target="_blank" style="font-weight:normal"> Scanderbeg was an
                                        albanian hero of six centuries ago</a></dd>
                                <dt>Romeo and Juliet</dt>
                                <dd style="margin-left: 30px;"><a href="images/Places/gadime5.jpg" target="_blank" style="font-weight:normal"> Crystals almost
                                        joining</a></dd>
                            </dl>
                        </div>
                        <div class="tables">
                            <table >
                                <caption><b><i><u>Facts:</u></i></b></caption>
                                <tbody>
                                    <tr>
                                        <th>City</td>
                                        <td>Lipjan</td>
                                    </tr>
                                    <tr>
                                        <th>Municipality</td>
                                        <td>Lipjan</td>
                                    </tr>
                                    <tr>
                                        <th>Street</td>
                                        <td>Gadime e Poshtme</td>
                                    </tr>
                                    <tr>
                                        <th>Postal Code</td>
                                        <td>10000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="readMore hidden">

                    <div class="story short">
                        <div>
                            <img src="images/places/brezovica1.jpg" alt="kosovo.jpg" class="miniSlideShow fotot" />
                        </div>
                        <div id="photos" style="margin-left: 35%;">
                            <span class="dot blueDot" onclick="showNextPicture(5,0,1)"></span>
                            <span class="dot" onclick="showNextPicture(5,1,1)"></span>
                            <span class="dot" onclick="showNextPicture(5,2,1)"></span>
                            <span class="dot" onclick="showNextPicture(5,3,1)"></span>
                        </div>
                        <div id="info">
                            <h2>Brezovica Mountain</h2>
                            <h3>Weekends in Winter</h3>
                            <h4>Sht&euml;rpc&euml;</h4>
                        </div>

                    </div>
                    <div class="story long">
                        <h2>HISTORY:</h2>
                        <p>Brezovica is the most visited winter tourist destinations in Kosovo. The ski resort area is
                            ideally situated on the north
                            and northwest-facing slopes of the Šar National Park. The ridge line spans 39,000 hectares
                            of high alpine mountain terrain and forests,
                            with a highly diverse and abundant flora and fauna. Located within 90 minutes of two
                            international airports, the Brezovica resort area
                            represents one of the last remaining under-developed ski resort areas in Southeast Europe.
                        </p>
                        <h2>What can you do there</h2>
                        <p>You can also visit Brezovica during the summer, especially if you are seeking fresh air.
                            Local people build houses (villas) there
                            and spend weekends there during the summer to relax, as well as in winter to ski. But most
                            importantly, it's the best place in
                            Kosov&euml; for skiing;
                        </p>
                        <div class="activities">
                            <p>Some of the hotels near Brezovica are:</p>
                            <ul style="list-style-type: none;">
                                <li><a href="https://www.pinehotel.info/" target="_blank">Hotel Pine</a></li>
                                <li><a href="http://www.hotelsharri.com/" target="_blank">Hotel Sharri</a></li>
                                <li><a href="images/Places/meshtekna.jpg" target="+blank">Hotel Meshtekna</a></li>

                            </ul>
                        </div>
                        <div class="tables">
                            <table >
                                <caption><b><i><u>Facts:</u></i></b></caption>
                                <tbody>
                                    <tr>
                                        <th>City</td>
                                        <td>Sht&euml;rpc&euml;</td>
                                    </tr>
                                    <tr>
                                        <th>Municipality</td>
                                        <td>Sht&euml;rpc&euml;</td>
                                    </tr>
                                    <tr>
                                        <th>Street</td>
                                        <td>Sht&euml;rpc&euml;</td>
                                    </tr>
                                    <tr>
                                        <th>Postal Code</td>
                                        <td>10000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="readMore hidden">

                    <div class="story short">
                        <div>
                            <img src="images/places/rugova1.jpg" alt="kosovo.jpg" class="miniSlideShow fotot" />
                        </div>
                        <div id="photos" style="margin-left: 35%;">
                            <span class="dot blueDot" onclick="showNextPicture(6,0,1)"></span>
                            <span class="dot" onclick="showNextPicture(6,1,1)"></span>
                            <span class="dot" onclick="showNextPicture(6,2,1)"></span>
                            <span class="dot" onclick="showNextPicture(6,3,1)"></span>
                        </div>
                        <div id="info">
                            <h2>Rugova Canyon</h2>
                            <h3>A cool place to spend a Sunday</h3>
                            <h4>Pej&euml;</h4>
                        </div>

                    </div>
                    <div class="story long">
                        <h2>HISTORY:</h2>
                        <p>Rugova Canyon or Rugova Gorge (Albanian: Gryka e Rugovës) is a river canyon near Peć in
                            Western Kosovo, in the Prokletije mountains,
                            close to the border with Montenegro. With a length of 25 km (16 mi) and a depth up to 1,000
                            meters, Rugova is considered to be one
                            of Europe's longest and deepest canyons. It was created by water erosion and the retreat of
                            the Peć glacier.
                            The Peć Bistrica river cuts through the canyon.</p>
                        <h2>What can you do there</h2>
                        <p>The canyon of Rugova in Kosovo , The Albanian Alps , a wonderfull place to visit with
                            noumerous waterfalls , caves , lakes , and
                            great mountain tops for wonderfull landscapes , great food , and people too </p>

                        <div>
                            <table>
                                <caption><b><i><u>Facts:</u></i></b></caption>
                                <thead>
                                    <th>City</th>
                                    <th>Municipality</th>
                                    <th>Street</th>
                                    <th>Postal Code</th>
                                </thead>
                                <tbody>
                                    <td colspan="2" align="center">Pej&euml;</td>
                                    <td>Pej&euml;</td>
                                    <td>10000</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="readMore hidden">

                    <div class="story short">
                        <div>
                            <img src="images/places/prevalla4.jpg" alt="kosovo.jpg" class="miniSlideShow fotot" />
                        </div>
                        <div id="photos" style="margin-left: 35%;">
                            <span class="dot blueDot" onclick="showNextPicture(7,0,1)"></span>
                            <span class="dot" onclick="showNextPicture(7,1,1)"></span>
                            <span class="dot" onclick="showNextPicture(7,2,1)"></span>
                            <span class="dot" onclick="showNextPicture(7,3,1)"></span>
                        </div>
                        <div id="info">
                            <h2>Prevalla</h2>
                            <h3>A cool place to walk</h3>
                            <h4>Near Prizren</h4>
                        </div>

                    </div>
                    <div class="story long">
                        <h2>HISTORY:</h2>
                        <p>Prevalla is a skiing center and touristic village which approximately is 30 km away from
                            Prizren, and about twelve kilometers from
                            <a href="https://www.skiresort.info/ski-resort/brezovica/"> Brezovica</a>, the largest ski center in Kosovo. It lies 1800m above sea level.
                            Prevalla (Prevalac) is located in the
                            south of Kosovo in the Sharr Mountains, in the road leads from Prizren via Prevalla to
                            Shtrpce.</p>
                        <h2>What can you do there</h2>
                        <p>During the summer, people go there to relax and rest, whereas during the winter people visit
                            it for its seasonal recreational sports.
                            The mountainous terrain, amazing landscape and fresh air make it a fantastic area for
                            hiking, skiing and unwinding. Moreover,
                            Lepenci River derives in this territory, which makes it even more attractive and interesting
                            for the visitors. </p>

                        <div>
                            <table>
                                <caption><b><i><u>Facts:</u></i></b></caption>
                                <thead>
                                    <th>City</th>
                                    <th>Municipality</th>
                                    <th>Street</th>
                                    <th>Postal Code</th>
                                </thead>
                                <tbody>
                                    <td colspan="2" align="center">Prizren</td>
                                    <td>Prizren</td>
                                    <td>10000</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </article>
        </main>
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
                    <div class="footerDivs" id="contact">
                        <p class="divHeader">Contact Us</p>
                        <form method="post" action="" id="form2">
                            <input type="text" name="name" placeholder="Full Name" class="required"/>
                            <input type="text" name="email" placeholder="Email Address" class="required"/>
                            <input type="text" name="subject" placeholder="Subject"class="required"/>
                            <textarea name="message" rows="4" cols="25" placeholder="Message"></textarea>
                            <input type="submit" value="SUBMIT"/>
                        </form>
                        
                    </div>
                </div>
                <p>Copyright &COPY; 2013 Domain Name <span style="float:right">Template by OS Templates</span></p>
            </footer>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/contactval.js"></script> 
</body>

</html>