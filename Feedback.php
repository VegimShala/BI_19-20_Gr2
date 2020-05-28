<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/headerFooter.css">
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="icon" href="images/flag.jpg">
    <script src="js/LStorage.js"></script>


    <script src="js/feedback.js"></script>

    <script>
        function tellUsWhy() {
            var value = document.getElementById("number").value;
            if (value < 30) {
                document.getElementById("tellUsWhyHidden").style.display = "block";
            }
            else {

                document.getElementById("tellUsWhyHidden").style.display = "none";
            }
            if (value == 100) {
                document.getElementById("smileFace").className = "reachedMax";
                document.getElementById("output").style.display = "none";
            }
            else {
                document.getElementById("smileFace").className = "";
                document.getElementById("output").style.display = "inline";
            }
            buildSmile(value);
            buildSad(value);
        }

        function buildSmile(expand) {
            var c = document.getElementById("smileFace");

            var ctx = c.getContext("2d");

            ctx.clearRect(0, 0, c.width, c.height);

            var grd = ctx.createLinearGradient(0, 0, 200, 0);
            grd.addColorStop(0, "orange");
            grd.addColorStop(1, "yellow");
            ctx.fillStyle = grd;
            ctx.beginPath();
            ctx.arc(25, 25, 15 + expand / 16, 0, Math.PI * 2, true); // Outer circle
            ctx.fill();
            ctx.moveTo(30 + expand / 16, 25);
            ctx.arc(25, 25, 5 + expand / 16, 0, Math.PI, false);  // Mouth (clockwise)
            ctx.stroke();
            ctx.beginPath()
            ctx.moveTo(19 - expand / 16, 17);
            ctx.arc(22, 19, 1.5 + expand / 1000, 0, Math.PI * 2, true);  // Left eye
            ctx.moveTo(26 + expand / 16, 17);
            ctx.arc(28, 19, 1.5 + expand / 1000, 0, Math.PI * 2, true);  // Right eye
            ctx.fillStyle = "black";

            ctx.fill();

        }
        function buildSad(expand) {
            var c = document.getElementById("sadFace");
            var ctx = c.getContext("2d");
            expand = 100 - expand;
            ctx.clearRect(0, 0, c.width, c.height);
            var grd = ctx.createLinearGradient(0, 0, 75, 0);
            grd.addColorStop(0, "orange");
            grd.addColorStop(1, "yellow");
            ctx.fillStyle = grd;
            ctx.beginPath();
            ctx.arc(25, 25, 15 + expand / 16, 0, Math.PI * 2, true); // Outer circle
            ctx.fill();
            ctx.moveTo(30 + expand / 16, 35);
            ctx.arc(25, 35, 5 + expand / 16, 0, Math.PI, true);  // Mouth (clockwise)
            ctx.stroke();
            ctx.beginPath()
            ctx.moveTo(19 - expand / 16, 17);
            ctx.arc(22, 19, 1.5 + expand / 1000, 0, Math.PI * 2, true);  // Left eye
            ctx.moveTo(26 + expand / 16, 17);
            ctx.arc(28, 19, 1.5 - expand / 1000, 0, Math.PI * 2, true);  // Right eye
            ctx.fillStyle = "black";

            ctx.fill();
        }   
        
         
        //add new key=>value to the HTML5 storage
		function SaveItem() {
			
            var name = document.forms.form.name1.value;
            var data = document.forms.form.data.value;
            localStorage.setItem(name, data);
            doShowAll();
            
        }
  
      
    
               function doShowAll() {
            if (CheckBrowser()) {
                var key = "";
                var list = "<tr><th>Name of User</th><th>Was the page helpful</th></tr>\n";
                var i = 0;
                //for more advance feature, you can set cap on max items in the cart
                for (i = 0; i <= localStorage.length-1; i++) {
                    key = localStorage.key(i);
                    list += "<tr><td>" + key + "</td>\n<td>"
                            + localStorage.getItem(key) + "</td></tr>\n";
                }
                //if no item exists in the cart
                if (list == "<tr><th>Name of User</th><th>Was the page helpful</th></tr>\n") {
                    list += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
                }
                //bind the data to html table
                //you can use jQuery too....
                document.getElementById('list').innerHTML = list;
            } else {
                alert('Cannot save shopping list as your browser does not support HTML 5');
            }
        }
        //-------------------------------------------------------------------------------------
//restart the local storage
function ClearAll() {
	localStorage.clear();
	doShowAll();
}
        /*
         =====> Checking the browser support
         //this step may not be required as most of modern browsers do support HTML5
         */
         
        function CheckBrowser() {
            if ('localStorage' in window && window['localStorage'] !== null) {
                // we can use localStorage object to store data
                return true;
            } else {
                    return false;
            }
        }
       
    </script>
    <script src="js/nav.js"></script>
</head>

<body onload="navActive('drop');navActive('feedbackNav');">

    <div id="blur"></div>
    <div class="wrapper">

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
                                <li><a href="Feedback.php" id="feedbackNav">Feedback</a></li>
                                <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                                    ?>
                                <li><a href="login.php">Log in</a></li><?php } else {?>
                                    <li><a href="<?php unset($_SESSION["loggedin"]);?>">Log out</a></li><?php }?>
                            </ul>
                        </div>
                    </li>
                                </ul>
            </nav>
            <h1 id="V">Thank you very much</h1>
            <h3>Visit us again...</h3>
        </header>


        <main >
            <div onload="doShowAll()">
                    <form  action="#labyrinth" method="get" name="form" id="feedback" oninput="x.value=parseInt(number.value)+'%'" onsubmit="return validate()">
                            <fieldset style="padding-left: 50px;">
                                <legend>
                                    <h2>Please help us improve our service by completing the feedback::</h2>
                                </legend>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="field">
                                                    <div class="label">
                                                        <p><b>Name </b> (Required)</p>
                                                    </div>
                                                    <input type="text" name=name1 class="text required highlightable"
                                                        placeholder="Type your first name here..."  autocomplete="on"
                                                        
                                                         />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="field">
                                                    <div class="label">
                                                        <p><b>Surname </b> (Required)</p>
                                                    </div>
                                                    <input type="text" name="name" class="text required highlightable"
                                                        placeholder="Type your last name here..." autocomplete="on"  
                                                        />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="field">
                                                    <div class="label">
                                                        <p><b>Telephone </b> (Optional) <span id="moreInfo">Only fulfill it if you had a Kosovan number during your stay here</span></p>
                                                        
                                                    </div>
                                                    <span style=" margin-left: -18px; font-size: 1.2em;">+</span>
                                                    <input type="tel" name="name" class="text highlightable" placeholder="(383) 78 123456" id="telephone"/>
                                                    <p id="splitTel"></p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="field">
                                                    <div class="label">
                                                        <p><b>Date of Birth </b> (optional)</p>
                                                    </div>
                                                    <input type="date" name="name" class="text highlightable"
                                                        placeholder="Type your last name here..." id="date"/>
                                                    <!--max date-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="states" colspan="2">
                                                <div class="field">
                                                    <div class="label">
                                                        <p><b>Continent </b> (Required)</p>
                                                    </div>
                                                    <?php
                                                    $continent = array (
                                                        array("Albania","Franc","France","Spain","Sweden","Norway","Germany","Finland","Poland","Italy","United Kingdom","Romania","Belarus"
                                                              ,"Kazakhstan","Greece","Bulgaria","Iceland","Hungary","Portugal","Austria","Czech Republic","Ireland","Lithuania"
                                                              ,"Latvia","Croatia","Bosnia and Herzegovina","Slovakia","Estonia","Russia","Denmark","Switzerland","Netherlands","Moldova","Belgium","Armenia","North Macedonia","Serbia","Turkey","Slovenia"
                                                              ,"Montenegro","Cyprus","Azerbaijan","Luxembourg","Georgia","Andorra","Malta","Liechtenstein","San Marino","Monaco","Vatican City"),
                                                        array("Antigua and Barbuda","Argentina","Bahamas","Barbados","Belize","Bolivia","Brazil","Canada","Chile","Colombia","Costa Rica","Cuba","Dominica","Dominican Republic","Ecuador","El Salvador","Grenada","Guatemala","Guyana","Haiti"
                                                              ,"Honduras","Jamaica","Mexico","Nicaragua","Panama","Paraguay","Peru","Saint Kitts and Nevis","Saint Lucia","Saint Vincent and the Grenadines","Suriname","Trinidad and Tobago","United States","Uruguay","Venezuela"
                                                        ),
                                                        array("Algeria","Angola","Benin","Botswana","Burkina Faso","Burundi","Cabo Verde","Cameroon","Central African Republic","Chad","Comoros","Congo","Cote d'Ivoire","Djibouti","Egypt","Equatorial Guinea","Eritrea","Eswatini","Ethiopia","Gabo","Gambia","Ghana","Guinea","Guinea-Bissau","Kenya","Lesotho","Liberia","Lybia","Madagascar","Malawi","Mali","Mauritania"
                                                             ,"Mauritius","Morocco","Mozambique","Namibia","Niger","Nigeria","Rwanda","Sao Tome and Principe","Senegal","Seychelles","Sierra Leone","Somalia","South Africa","South Sudan","Sudan","Tanzania","Togo","Tunisia","Uganda","Zambia","Zimbabwe","Wakanda"
                                                        ),
                                                        array("Afghanistan","Armenia","Azerbaijan","Bahrain","Bangladesh","Bhutan","Brunei","Cambodia","China","Cyprus","Georgia","India","Indonesia","Iran","Iraq","Israel","Japan","Jordan","Kazakhstan"
                                                        ,"Kuwait","Kyrgyztan","Laos","Lebanon","Malaysia","Maldives","Mongolia","Myanmar","Nepal","North Korea","Oman","Pakistan","Palestine","Philippines","Qatar","Russia","Saudi Arabia","Singapore","South Korea","Sri Lanka","Syria","Taiwan","Tajikistan","Thailand","Timor-Leste","Turkey","Turkmenistan","Uzbekistan","Vietnam","Yemen"
                                                    ),
                                                        array("Australia","Fiji","Kiribati","Marshall Islands","Micronesia","Nauru","New Zealand","Palau","Papua New Guinea","Samoa","Solomon Islands","Tonga","Tuvalu","Vanuatu"
                                                        )
                                                      );
                                                    ?>
                                                    <select name="continent" class="text required highlightable" id="selectContinent"
                                                        onclick="selectChanged()" >
                                                        <option value="0">Choose your continent:</option>
                                                        <option value="1">Europe</option>
                                                        <option value="2">America</option>
                                                        <option value="3">Africa</option>
                                                        <option value="4">Asia</option>
                                                        <option value="5">Australia</option>
                                                    </select>
            
                                                </div>
                                            </td>
                                            <td id="hidden">
                                                <div class="field">
                                                    <div class="label">
                                                        <p><b>Country </b> (Required)</p>
                                                    </div>
                                                    <datalist id="European">
                                                    <?php
                                                    for ($x = 0; $x <= sizeOf($continent[0]); $x++){
                                                    $output="<option>".$continent[0][$x]."</option>";
                                                    echo $output;
                                                    }
                                                    ?>
                                                    </datalist>
                                                    <datalist id="American">
                                                    <?php
                                                    for ($x = 0; $x <= sizeOf($continent[1]); $x++){
                                                    $output="<option>".$continent[1][$x]."</option>";
                                                    echo $output;
                                                    }
                                                    ?>
                                                    </datalist>
            
                                                    <datalist id="African">
                                                    <?php
                                                    for ($x = 0; $x <= sizeOf($continent[2]); $x++){
                                                    $output="<option>".$continent[2][$x]."</option>";
                                                    echo $output;
                                                    }
                                                    ?>
                                                    </datalist>
            
                                                    <datalist id="Asian">
                                                    <?php
                                                    for ($x = 0; $x <= sizeOf($continent[3]); $x++){
                                                    $output="<option>".$continent[3][$x]."</option>";
                                                    echo $output;
                                                    }
                                                    ?>
                                                    </datalist>
            
                                                    <datalist id="Australian">
                                                    <?php
                                                    for ($x = 0; $x <= sizeOf($continent[4]); $x++){
                                                    $output="<option>".$continent[4][$x]."</option>";
                                                    echo $output;
                                                    }
                                                    ?>
                                                    </datalist>
                                                    <input type="text" list="European" class="text required highlightable" name="country" id="country">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="field">
                                                    <p>Is this your first visit to the website?</p>
                                                    <p><input type="radio" value="1" class="buttons" name="firstVisit"
                                                            onclick="showReason(0)"> <span> Yes</span> </p>
                                                    <p><input type="radio" value="2" class="buttons" name="firstVisit"
                                                            onclick="showReason(1)"> <span>No</span> </p>
                                                    <div id="reasonHidden">
                                                        What is the primary reason for your visit?
                                                        <textarea name="reason" class="textarea text highlightable" rows="5"></textarea>
                                                    </div>
                                                </div>
            
                                            </td>
            
                                            <td>
                                                <div class="field">
                                                    <p>Were you able to find what you needed?</p>
                                                    <p><input type="radio" class="buttons" name=data value="yes" onclick="SaveItem()"
                                                            onclick="showNeeded(0)"> Yes </p>
                                                    <p><input type="radio" class="buttons" name=data value="no" onclick="SaveItem()"
                                                            onclick="showNeeded(1)" > No </p>
                                                    <div id="foundHidden">
                                                        Please tell us what info were you seeking:
                                                        <textarea name="reason" class="textarea text" rows="5"
                                                            form="feedback"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                             
                                                    
                                        
                                                <div id="items_table">
                                                    <h3>Feedback record</h3>
                                                    <table id=list></table>
                                                   
                                                        <td>
                                                            <p>
                                                                <label><input type=button value="Clear" onclick="ClearAll()">
                                                                    <i>* Delete all items</i></label>
                                                            </p>
                                                        </td>
                                                   
                                                   
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="field">
                                                    <p>Which parts of our guide did you find helpful</p>
                                                    <div class="checkBoxes">
                                                        <p><input type="checkbox" value="1" class="buttons" name="helpfulParts">
                                                            Accomodation</p>
                                                        <p><input type="checkbox" value="2" class="buttons" name="helpfulParts">
                                                            Foods and Drinks</p>
                                                        <p><input type="checkbox" value="3" class="buttons" name="helpfulParts">
                                                            Natural Beauties</p>
                                                        <p><input type="checkbox" value="4" class="buttons" name="helpfulParts">
                                                            Monuments </p>
                                                    </div>
                                                    <div class="checkBoxes">
                                                        <p><input type="checkbox" value="5" class="buttons" name="helpfulParts">
                                                            Festivals and Events</p>
                                                        <p><input type="checkbox" value="6" class="buttons" name="helpfulParts">
                                                            History of Kosovo</p>
                                                        <p><input type="checkbox" value="7" class="buttons" name="helpfulParts">
                                                            Gallery</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="field">
                                                    <p>How helpful did you find our guide (1-100)</p>
                                                    <p><canvas id="sadFace" width="50" height="50"></canvas>
                                                        <input type="range" id="number" value="50" onmouseover="tellUsWhy();" onchange="tellUsWhy()">
                                                        <canvas id="smileFace" width="50" height="50"></canvas><span
                                                            id="output"><output name="x" for="number"></output></span></p>
                                                    <div id="tellUsWhyHidden">
                                                        Please tell us what went wrong:
                                                        <textarea name="wrong" class="text highlightable textarea " rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
            
            
                                    </tbody>
                                    <tfoot>
                                        <td colspan="2">
                                            <div class="field rotate3d">
                                                <div class="label">
                                                    <p>Do you have any other comment to add:</p>
                                                </div>
            
                                                <textarea name="comment" class="textarea text" rows="5"></textarea>
                                            </div>
                                            <div>
                                                <input type="submit" formtarget="_blank" value="SUBMIT"  id="submitFeedback" ><br><br>
                                                <input type="reset" value="RESET    " onclick="drawBarriers()">
                                            </div>
                                        </td>
            
                                    </tfoot>
            
                                </table>
                                </fieldset>
            
                        </form>
        </div>
                <div class="testimonials">
                    <h2 style="margin-bottom: 5%; border-bottom: 3px solid darkblue;">Testimonials</h2>
                    <h4 id="emri"></h4>
                    <p id="com"></p>
                    <p id="nat"></p>
                </div>
                <script>
                       function Person(first, last, age, comment) {
            this.name = first;
            this.surname = last;
            this.age = age;
            this.comment = comment;}
            Person.prototype.nationality='English'
            
            Person.prototype.fname = function() {
            return this.name + " " + this.surname;
            };

            var person=new Person('Andi','Ahmeti',25,'A very nice and helpful page')
            document.getElementById('com').innerHTML=person['comment']
            document.getElementById('emri').innerHTML=person.fname()
            document.getElementById('nat').innerHTML=person['nationality']
                </script>
        </main>





        <footer>
            <div>
                <div class="footerDivs" id="blog">
                    <p class="divHeader">From the blog</p>
                    <p class="greenText">Kosovo Republic</p>
                    <p class="smallText"><span class="greenText">Britanicca</span>, britanicca.com</p>
                    <p class="smallText">Friday, 6th April 2017</p>
                    <p>Kosovo, self-declared independent country in the Balkans region of Europe. Although the
                        United States and most members of the European Union (EU) recognized Kosovo’s declaration
                        of independence from Serbia in 2008 </p>
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
                    <p class="aligner"> <span class="greenText"><a href="#">@EUKosovo </a></span> EU Office/EU Special
                        Representative in Kosovo play the pivotal role in
                        realising the European agenda for Kosovo with the aim to support its European path.</p>
                    <p class="aligner"> <span class="greenText"><a href="#">@kenethhandresen </a></span> A rare, 100
                        year old postcard from Gjakova in Kosovo. It is poststamped
                        both in Prizren and Gjakova and was sent to a woman in Zagreb (Croatia) on April 17, 1920 .
                        #Kosovo #postcard</p>
                </div>
                <div class="footerDivs" id="contact">
                    <p class="divHeader">Contact Us</p>
                    <form method="post" action="http://www.google.com" id="form2">
                        <input type="text" name="name" placeholder="Full Name" class="required1"/>
                        <input type="text" name="email" placeholder="Email Address" class="required1"/>
                        <input type="text" name="subject" placeholder="Subject" class="required1"/>
                        <textarea name="message" rows="4" cols="25" placeholder="Message"></textarea>
                        <input type="submit" value="SUBMIT"/>
                    </form>
                    
                </div>
            </div>
            <p>Copyright &COPY; 2013 Domain Name <span style="float:right">Template by OS Templates</span></p>
        </footer>
    </div>

    <script>
    function isBlank(inputField)
{
    if(inputField.value==""){
        return true;
    }
    return false;
}

function makeClean(element)
{
    element.classList.remove("error");
}

window.addEventListener("load", function(){
    var requiredInputs = document.querySelectorAll(".required1");
    for (var i =0; i<requiredInputs.length; i++)
    {
        requiredInputs[i].addEventListener("change", function(e){
            makeClean(e.target);
        });
    }
    var mainForm = document.getElementById("form2");
    mainForm.addEventListener("submit", function(e){
    
    var requiredInputs = document.querySelectorAll(".required1");
    for (var i =0; i<requiredInputs.length; i++)
    {
        if(isBlank(requiredInputs[i]))
        {
            e.preventDefault();
            requiredInputs[i].classList.add("error");
        }
        else
        {
            makeClean(requiredInputs[i]);
        }
    } 
    });
});
    </script>
</body>

</html>