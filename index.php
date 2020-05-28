<?php
// Initialize the session
session_start();
require_once "config.php";
echo $_SESSION["loggedin"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/link.js"></script>
    <link rel="icon" href="images/flag.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Welcome to Kosovo!</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/headerFooter.css">
    <script src="js/nav.js"></script>
</head>

<body onload="navActive('home')">
    <div id="blur">

    </div>
    <div class="wrapper">
    <header id="entrance1">
            <p>Kosovo</p>
            <nav>
                <ul>
                    <li><a href="index.php" id="home">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="Places.php">PLACES</a></li>
                    <li><a href="Services.php">SERVICES</a></li>
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
                                </ul>
            </nav>
            <div id="content">
                <!--<a href="#" onclick="plusDivs(-1)">&#10094;</a>-->
                <div class="SlideShow">
                    <div id="text">
                        <h1>Vere n'Dimen</h1>
                        <p>A cold but still a cozy place, gathering family and friends in holiday months. Lighted mini
                            houses all over the bullevard of Mother Teresa serving hot chocholate and food and a lot of
                            happiness.</p>
                        <button><a href="https://www.facebook.com/pages/category/Wine-Bar/Ver%C3%AB-nDim%C3%ABn-967914139889558/">Read more Here >></a></button>
                    </div>
                    <img src="images/service15.jpg" alt="foto1">
                </div>
                <div class="SlideShow">
                    <div id="text">
                        <h1>Prite n'Shesh</h1>
                        <p>Lots of activities during December. Famous artists and bands to perform in Mother Teresa
                            Square during this month.
                            Be ready to welcome 2020!!
                        </p>
                        <button><a href="https://prishtinaonline.com/kerkimi/2495/programi-i-dhjetorit-prite-nshesh">Read more Here >></a></button>
                    </div>
                    <img src="images/year2.png" alt="foto1">
                </div>
                <!--<a href="#" onclick="plusDivs(1)">&#10095;</a>-->
            </div>
        </header>
        <div id="body">
    
            <div class="search" style="margin-top:3%"> 
                <form class="example" action="" style="margin:auto;max-width:500px">
                    <input type="text" placeholder="Search.." name="search2">
                </form>
            </div>
            
            <div id="services">
                <?php
                    $sql ="SELECT  hotels.name,hotels.address,hotels.tel,hotels.logo FROM hotels where hotels.id<5";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<a  id='forma'>
                            <div class='service'>
                            <img src=".$row["logo"]." alt='foto1'>
                            <div class='text2'>
                              <h1>".$row["name"]."</h1>
                              <p><strong>Address</strong> <em>".$row["address"]."</em><br />
                                  <strong>Phone: </strong> <em>".$row["tel"]."</em>
                              </p>
                          </div>
                      </div>
                  </a>";
                        }
                    } else {
                        echo "No hotels";
                    }
                    
                  
                ?>
                                
            </div>
            <div class="hover_bkgr_fricc">
                <span class="helper"></span>
                <div>
                    <div class="popupCloseButton">X</div>
                    <h1>Book now</h1>
                    <form id="book" name="form" method="POST" action="#" onsubmit="return validateForm()">
                        <label>Name:
                            <input type="text" name="name">
                        </label><br />
                        <label>Email:
                            <input name="email" type="email" placeholder="e.x. name@domain.com">
                        </label></br>
                        <label>Check-in:
                            <input name="data1" type="date" required>
                        </label><br />
                        <label>Check-out:
                            <input name="data2" type="date" style="margin:2% 7.8%;" required>
                        </label><br />
                        <label>Room :
                            <select name="room">
                                <option>Single room</option>
                                <option>Double room</option>
                                <option>Triple room</option>
                                <option>Villa</option>
                            </select>
                        </label><br />
                        <input type="radio" name="rez" checked>All-inclusive
                        <input type="radio" name="rez">Just breakfast
                        <input type="radio" name="rez">No food
                        <br />
                        Encryption: <keygen name="security" form="secureform">
                        <input type="submit" value="Book!" id="btn">
                    </form>
                </div>
            </div>
            <div id="line">
                <fieldset>
                    <legend>
                        <h1>CITIES</h1>
                    </legend>
                </fieldset>

            </div>
            <div id="features">
                <div id="f1">
                    <a href="images/prishtina.jpg" target="_blank">
                        <div class="feature1">
                            <img src="images/prishtina.jpg" alt="foto1">
                            <div class="title">
                                <p>PRISHTINA</p>
                            </div>

                        </div>
                    </a>
                    <a href="images/pr4.jpg" target="_blank">
                        <div class="feature1">
                            <img src="images/pr4.jpg" alt="foto1">
                            <div class="title">
                                <p>PRIZREN</p>
                            </div>
                        </div>
                    </a>
                    <a href="images/gjakova.jpg" target="_blank">
                        <div class="feature1">
                            <img src="images/gjakova.jpg" alt="foto1">
                            <div class="title">
                                <p>GJAKOVA</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div id="f2">
                    <a href="images/peja.jpg" target="_blank">
                        <div class="feature2">
                            <img src="images/peja.jpg" alt="foto1">
                            <div class="title">
                                <p>PEJA</p>
                            </div>
                        </div>
                    </a>
                    <a href="images/gjilan.jpg" target="_blank">
                        <div class="feature2">
                            <img src="images/gjilan.jpg" alt="foto1">
                            <div class="title">
                                <p>GJILAN</p>
                            </div>
                        </div>
                    </a>
                    <a href="images/mitrovica.jpg" target="_blank">
                        <div class="feature2">
                            <img src="images/mitrovica.jpg" alt="foto1">
                            <div class="title">
                                <p>MITROVICA</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div id="line">
                <fieldset>
                    <legend>
                        <h1>RECENTLY VIEWED</h1>
                    </legend>
                </fieldset>

            </div>
            </div>
           
            <?php 
if(isset($_SESSION["loggedin"])){  
   if(isset($_COOKIE['recent'])){ 
      $sql ="SELECT * FROM services where name='".$_COOKIE['recent']."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='container'>
            <div class='row'>
                <h2 style='text-align:center'>".$row["type"]."</h2>
            </div>
            
            <div class='block'>
              <div class='row'>
                <div class='span4'>
                  <img class='img-left' src='".$row["Logo"]."'/>
                  <div class='text1'><h3>".$row["name"]."</h3>
                  <p>This is the last thing u visited</p>
                  </div>
                </div>
             </div>
            </div>
            </div>";
        }
    } else {
        echo "No hotels";
    }
    
    $conn->close();}
 else{ 
    echo "No items for auction."; 
} 
}else{
    echo "<p style='color:darkblue;font-weight:bold;font-size:32px'></p>";
}
?>
     
        </div>
        
        <footer>
            <div>
                <div class="footerDivs" id="blog">
                    <p class="divHeader">From the blog</p>
                    <p class="greenText">Kosovo Republic</p>
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
                            <li>&Gt;<a href="https://en.wikipedia.org/wiki/International_recognition_of_Kosovo">
                                    International Recognition</a></li>
                            <li>&Gt;<a href="https://www.bbc.com/news/world-europe-18328859"> BBC-Kosovo Profile</a>
                            </li>
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
                    <form method="post" action="http://www.google.com" id="form2">
                        <input type="text" name="name" placeholder="Full Name" class="required" />
                        <input type="text" name="email" placeholder="Email Address" class="required" />
                        <input type="text" name="subject" placeholder="Subject" class="required" />
                        <textarea name="message" rows="4" cols="25" placeholder="Message"></textarea>
                        <input type="submit" value="SUBMIT" />
                    </form>

                </div>
            </div>
            <p>Copyright &COPY; 2013 Domain Name <span style="float:right">Template by OS Templates</span></p>
        </footer>

    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="js/main.js"></script>
    <script src="js/contactval.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.example input[type="text"]').on("keyup input", function(){
        /* Get input value on change */

        var inputVal = $(this).val();
        console.log(inputVal);
        var resultDropdown = $("#services");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
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