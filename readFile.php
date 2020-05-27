<?php

class ReadFile
{
    private $filename;
    private $table;

    public function __construct($table)
    {
        $this->filename = "JSON/$table.json";
        $this->table = $table;
    }

    public function __destruct()
    {
        echo "The read file was: {$this->filename}";
    }

    public function readJSONFile()
    {
        require "config.php";
        $data = file_get_contents($this->filename);
        $array = json_decode($data,true);
        $sql = "";
        foreach($array as $row)
        {
            switch($this->table)
            {
                case "Users":
                    $sql .= " INSERT INTO Users(id,fullname,username,email,pass,lv) VALUES('".$row["id"]."','".$row["fullname"]."','".$row["username"]."','".$row["email"]."','".$row["pass"]."','".$row["lv"]."');";
                     break;
                case "Bookings":
                    $sql .= " INSERT INTO Bookings(id,checkIn,checkOut,offer,room,userId,hotelId,price) VALUES('".$row["id"]."','".$row["checkIn"]."','".$row["checkOut"]."','".$row["offer"]."','".$row["room"]."','".$row["userId"]."','".$row["hotelId"]."','".$row["price"]."');";
                     break;
                case "Cities":
                    $sql .= " INSERT INTO Cities(id,name,location,zipcode,trait) VALUES('".$row["id"]."','".$row["name"]."','".$row["location"]."','".$row["zipcode"]."','".$row["trait"]."');";
                     break;
                case "Feedback":
                    $sql .= " INSERT INTO Feedback(id,tel,continent,state,helpful,comment,userId) VALUES('".$row["id"]."','".$row["tel"]."','".$row["continent"]."','".$row["state"]."','".$row["helpful"]."','".$row["comment"]."','".$row["userId"]."');";
                     break;
                case "Hotels":
                    $sql .= " INSERT INTO Hotels(id,name,address,tel,ID_Qyteti,Logo) VALUES('".$row["id"]."','".$row["name"]."','".$row["address"]."','".$row["tel"]."','".$row["ID_Qyteti"]."','".$row["Logo"]."');";
                     break;
                case "Photos":
                    $sql .= " INSERT INTO Photos(id,src,tag) VALUES('".$row["id"]."','".$row["src"]."','".$row["tag"]."');";
                     break;
                case "Places":
                    $sql .= " INSERT INTO Places(id,name,description,street,municipality,cityId,Logo) VALUES('".$row["id"]."','".$row["name"]."','".$row["description"]."','".$row["street"]."','".$row["municipality"]."','".$row["cityId"]."','".$row["Logo"]."');";
                     break;
                case "Services":
                    $sql .= " INSERT INTO Services(id,name,type,Logo) VALUES('".$row["id"]."','".$row["name"]."','".$row["type"]."','".$row["Logo"]."');";
                     break;
                case "Tour":
                    $sql .= " INSERT INTO Tour(id,src,header,content,idserv) VALUES('".$row["id"]."','".$row["src"]."','".$row["header"]."','".$row["content"]."','".$row["idserv"]."');";
                     break;

            }
            
        }
        if ($conn->multi_query($sql) === TRUE) {
            echo "The data in table $this->table are successfully inserted";
            } else {
            echo "Error while trying to insert data in the table $this->table " . $conn->error;
            }
        
        
    }
}

    // $readUsers = new ReadFile("Users");
    // $readUsers->readJSONFile();
    // $readBookings = new ReadFile("Bookings");
    // $readBookings->readJSONFile();
    // $readCities = new ReadFile("Cities");
    // $readCities->readJSONFile();
    // $readFeedback = new ReadFile("Feedback");
    // $readFeedback->readJSONFile();
    // $readHotels = new ReadFile("Hotels");
    // $readHotels->readJSONFile();
    // $readPhotos = new ReadFile("Photos");
    // $readPhotos->readJSONFile();
    $readPlaces = new ReadFile("Places");
    $readPlaces->readJSONFile();
    // $readServices = new ReadFile("Services");
    // $readServices->readJSONFile();
    // $readTour = new ReadFile("Tour");
    // $readTour->readJSONFile();

?>