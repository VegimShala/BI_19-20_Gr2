<?php
// Initialize the session
session_start();
require_once "config.php";
// Check if the user is logged in, if not then redirect him to login page

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/headerFooter.css"/>
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="icon" href="images/flag.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/gallery.js"></script>
    <title>Gallery</title>
    <script src="js/nav.js"></script>
</head>

<body onload="navActive('gallery')">

    <div id="blur"></div>
    <div class="wrapper">

        <header id="entrance">
            <p>Kosovo</p>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="About.php" id="about1">ABOUT</a></li>
                    <li><a href="Gallery.php" id="gallery">GALLERY</a></li>
                    <li><a href="Places.php">PLACES</a></li>
                    <li><a href="Services.php">SERVICES</a></li>
                    <li><a href="#" id="drop">MORE</a>
                        <div id="dropdown">
                        <ul>
                              
                                <?php if(!isset($_SESSION["loggedin"])){
                                    ?>
                                <li><a href="login.php">Log in</a></li><?php } else {?>
                                    <li><a href="logout.php">Log out</a></li><?php }?>
                            </ul>
                        </div>
                    </li>
                                </ul>
            </nav>
        <div id="anim-two">
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              
            </ul>
          </div>
        <h1>GALLERY</h1>
        </header>
        <section id="foto">
            <div class="card">
                <a href="images/amazing.jpg"><img src="images/amazing.jpg" data-alt-src="images/amazingg.jpg" temp="" alt="foto"></a>
            </div>
            <div class="card">
                <a href="images/amazing2.jpg"><img src="images/amazing2.jpg" data-alt-src="images/amazing22.jpg"  temp="" alt="foto"></a>
            </div>
            <div class="card">
                <a href="images/pr1.jpg"><img src="images/pr1.jpg" data-alt-src="images/pr11.jpg" temp=""></a>
            </div>
        </section>
        <video width="820" height="440" controls>
            <source src="images/kosovo.mp4" type="video/mp4">
          Your browser does not support the video tag.
          </video>
        <h1>Tags...</h1>
        <button id="btn1" onclick="change(1)">#prishtina</button>
        <button id="btn2" onclick="change(2)">#seasons</button>
        <button id="btn3" onclick="change(3)">#nature</button> 
        <button id="btn4" onclick="change(4)">#aesthetic</button>
        <div id="gallery1">
            <?php
            $sql = "SELECT src FROM Photos WHERE tag = 'prishtina';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<a target='_blank' href=".$row["src"]."><img src=".$row["src"]."></a>";
                }
            }
            else{
                echo "<h3>No photos were found for this category</h3>";
            }
            ?>
        </div>
        <div id="gallery2">
        <?php
            $sql = "SELECT src FROM Photos WHERE tag = 'seasons';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<a target='_blank' href=".$row["src"]."><img src=".$row["src"]."></a>";
                }
            }
            else{
                echo "<h3>No photos were found for this category</h3>";
            }
            ?>
            </div>
            <div id="gallery3">
            <?php
            $sql1 = "SELECT src FROM Photos WHERE tag = 'nature';";
            $result = $conn->query($sql1);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<a target='_blank' href=".$row["src"]."><img src=".$row["src"]."></a>";
                }
            }
            else{
                echo "<h3>No photos were found for this category</h3>";
            }
            ?>
                </div>
            <div id="gallery4">
                <?php
            $sql3 = "SELECT src FROM Photos WHERE tag = 'aesthetic';";
            $result = $conn->query($sql3);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<a target='_blank' href=".$row["src"]."><img src=".$row["src"]."></a>";
                }
            }
            else{
                echo "<h3>No photos were found for this category</h3>";
            }

            
            ?>
                
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
    <script src="js/gall.js"></script>
    <script src="js/contactval.js"></script>
</body>
</html>