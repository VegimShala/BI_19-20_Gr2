<?php
// Include config file
require_once "config.php";
 session_start();

 
// Define variables and initialize with empty values

$category_err =$servicename_err = $img_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
$category_err =$servicename_err = $img_err = "";
$category = "";
$serviceName = "";
$serviceImg = "";
 
    // Validate category
    if(empty(trim($_POST["Category"]))){
        $category_err = "Please enter a category.";
    } else{
        $category = $_POST["Category"];
        }


    

    // Validate service name
    // if(empty(trim($_POST["name"]))){
    //     $servicename_err = "Please enter a service name.";
    // } else{
    //     $serviceName = $_POST["name"];
    //     }

function error($n) {

    if (empty($n)) 
    {
        throw new Exception('Please enter a service name.');
    }
    else
    {
      $serviceName=$n;  
    }

   
   return $serviceName; 
    }

    try {
         error($_POST["name"]);
        } catch (Exception $e) {
        $servicename_err=$e->getMessage();
    }



     // Validate service img
     if(empty(trim($_POST["img"]))){
        $img_err = "Please choose an image";
    } else{
        $serviceImg =  "images/Services/".$_POST["img"];
        }

        

    if(empty($category_err) && empty($servicename_err) && empty($img_err))
    {
        $sqlA = "INSERT INTO Services(id,name,type,Logo) VALUES (NULL,'$serviceName','$category','$serviceImg');";
        if ($conn->query($sqlA) === TRUE) {
            // echo "Table Users created successfully";
          } else {
            echo "Error creating table: " . $conn->error;
          }
            
    }
    else
    {
        // echo $category_err ."<br>". $servicename_err ."<br>". $img_err;
    }
    




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

input[type=text], input[type=password], input[type=email],input[type=file], #services{
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
                    <li><a href="index.php" id="home">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="Places.php">PLACES</a></li>
                    <li><a href="Services.php">SERVICES</a></li>
                     <?php if(!isset($_SESSION["loggedin"])){?>
                        
                    <li><a href="login.php">Log in</a></li><?php } else {?>
                    <li><a href="logout.php">Log out</a></li><?php }?></li>
                </ul>
            </nav>

          
            <canvas id="myCanvas" width="900" height="200">
                Your browser does not support the canvas element.
            </canvas>
   
        </header>

            <form action="#" method="post">
            <div class="container" >

            <label for="services" id="some" ><b>Select category</b></label>
                     <select id="services" type="text" name="Category" placeholder="hhh">
                     <?php
                     $sqlD = "SELECT DISTINCT type FROM Services;";
                     $result = $conn->query($sqlD);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $t = $row["type"];
                            echo "<option value='$t'>$t</option>";
                        }
                    }
                    else{
                        echo "<option> No categories were found </option>";
                    }
                    ?>
                     </select>
                     <p id="msg" style="color:darkblue; margin:1%" ><?php echo $category_err; ?></p>

            <label for="fname" id="some" ><b>Name of service</b></label>
            <input type="text" placeholder="Name of service" id="fname" name="name" >
            <p id="msg" style="color:darkblue; margin:1%" ><?php echo $servicename_err; ?></p>
     
            <label for="img" id="some"><b>Select image:</b></label>
            <input type="file" id="img" name="img" accept="image/*">
            <p id="msg" style="color:darkblue; margin:1%" ><?php echo $img_err; ?></p>
    
            <button id="bt1" type="submit" >Add Service</button>
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
                    <form method="post" action=""  id="form2">
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