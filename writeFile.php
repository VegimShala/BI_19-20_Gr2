<?php



class WriteFile
{
    private $filename;
    private $type;

    public function __construct($t)
    {
        $this->type = $t;
    }

    public function setFileName($s)
    {
        $this->filename = $s;
    }

    public function getFileName()
    {
        return $this->filename;
    }
}

class WriteJSONFile extends WriteFile
{
    public function writeJSONNew($table) //e kqyr me contains
    {
        require "config.php"; 
        $query = "SELECT * FROM $table;";
        //echo "<h2>CREATING JSON FILE FROM THE DATA IN TABLE $table </h2><br>";
        //echo "The following query is being used to export the data<br>$query<br>";
        $result = mysqli_query($conn,$query);
        $user_data = array(); 
        $this->setFileName("JSON/$table.json");
        while($row = mysqli_fetch_array($result))
        {
            switch($table)
            {
                case "Users":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'fullname' => $row["fullname"],
                        'username' => $row["username"],
                        'email' => $row["email"],
                        'pass' => $row["pass"],
                        'lv' => $row["lv"]
                    );
                    break;
                case "Bookings":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'checkIn' => $row["checkIn"],
                        'checkOut' => $row["checkOut"],
                        'offer' => $row["offer"],
                        'room' => $row["room"],
                        'userId' => $row["userId"],
                        'hotelId' => $row["hotelId"],
                        'price' => $row["price"]
                    );
                    break;
                case "Cities":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'name' => $row["name"],
                        'location' => $row["location"],
                        'zipcode' => $row["zipcode"],
                        'trait' => $row["trait"]
                    );
                    break;
                case "Feedback":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'tel' => $row["tel"],
                        'continent' => $row["continent"],
                        'state' => $row["state"],
                        'helpful' => $row["helpful"],
                        'comment' => $row["comment"],
                        'userId' => $row["userId"]
                    );
                    break;
                case "Hotels":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'name' => $row["name"],
                        'address' => $row["address"],
                        'tel' => $row["tel"],
                        'ID_Qyteti' => $row["ID_Qyteti"],
                        'Logo'=> $row["Logo"]
                    );
                    break;
                case "Photos":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'src' => $row["src"],
                        'tag' => $row["tag"]
                    );
                    break;
                case "Places":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'name' => $row["name"],
                        'description' => $row["description"],
                        'street' => $row["street"],
                        'municipality' => $row["municipality"],
                        'cityId' => $row["cityId"],
                        'Logo' => $row["Logo"]
                    );
                    break;
                case "Services":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'name' => $row["name"],
                        'type' => $row["type"],
                        'Logo' => $row["Logo"]
                    );
                    break;
                case "Tour":
                    $user_data[] = array(
                        'id' => $row["id"],
                        'src' => $row["src"],
                        'header' => $row["header"],
                        'content' => $row["content"],
                        'idserv' => $row["idserv"]
                    );
                    break;
                
            }
            
        }
        $encoded = json_encode($user_data);
        $fN = $this->getFileName();
        if(file_put_contents($fN,$encoded))
        {
            //echo $fN ." file has been created";
        }
        else
        {
            //echo $fN ." file has not been created";
        }
    }
}

// $writeUsers = new WriteJSONFile("json");
// $writeUsers->writeJSONNew("Users");
// $writeUsers->writeJSONNew("Bookings");
// $writeUsers->writeJSONNew("Cities");
// $writeUsers->writeJSONNew("Feedback");
// $writeUsers->writeJSONNew("Hotels");
// $writeUsers->writeJSONNew("Photos");
// $writeUsers->writeJSONNew("Places");
// $writeUsers->writeJSONNew("Services");
// $writeUsers->writeJSONNew("Tour");



?>

