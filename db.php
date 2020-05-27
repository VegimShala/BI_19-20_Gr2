<?php
require_once "config.php";
// Create database
// $sql = "CREATE DATABASE travelKosovo";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// // }

// $sql = "CREATE TABLE Users (
//     id VARCHAR(20)  PRIMARY KEY,
//     fullname VARCHAR(30) NOT NULL,
//     username VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     pass  VARCHAR(80)
//     ); ";

// $sql1 = " CREATE TABLE Hotels (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     address VARCHAR(30) NOT NULL,
//     tel VARCHAR(50),
//     ID_Qyteti INT(6) UNSIGNED,
//     Logo VARCHAR(20),
//     FOREIGN KEY(ID_Qyteti) REFERENCES Cities(id)
//     ); ";



    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table Users created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
    
//     if ($conn->query($sql1) === TRUE) {
//         echo "Table Hotels created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

// // sql to create table
// $sql2 = "CREATE TABLE Cities (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     location VARCHAR(30) NOT NULL,
//     zipcode INT(10),
//     trait  VARCHAR(30)
//     ); ";

//     if ($conn->query($sql2) === TRUE) {
//         echo "Table Cities created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

// $sql3 = "CREATE TABLE Services (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     type VARCHAR(30) NOT NULL
//     ); ";

//     if ($conn->query($sql3) === TRUE) {
//         echo "Table Services created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

// $sql4 = "CREATE TABLE Photos (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     src VARCHAR(30) NOT NULL,
//     tag VARCHAR(30) NOT NULL
//     ); ";

//     if ($conn->query($sql4) === TRUE) {
//         echo "Table Photos created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

// $sql5 = "CREATE TABLE Tour (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     src VARCHAR(30) NOT NULL,
//     header VARCHAR(30) NOT NULL,
//     content VARCHAR(90) NOT NULL,
//     idserv  INT(6) UNSIGNED,
//     FOREIGN KEY (idserv) REFERENCES Services(id)
//     ); ";

//     if ($conn->query($sql5) === TRUE) {
//         echo "Table Tour created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

// $sql6 = "CREATE TABLE Bookings (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     checkIn DATE NOT NULL,
//     checkOut DATE NOT NULL,
//     offer VARCHAR(90) NOT NULL,
//     room  INT(6) UNSIGNED,
//     userId VARCHAR(20),
//     hotelId INT(6) UNSIGNED,
//     price VARCHAR(30),
//     FOREIGN KEY (userId) REFERENCES Users(id),
//     FOREIGN KEY (hotelId) REFERENCES Hotels(id)
//     ); ";

//     if ($conn->query($sql6) === TRUE) {
//         echo "Table Bookings created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

// $sql7 = "CREATE TABLE Places (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name DATE NOT NULL,
//     description DATE NOT NULL,
//     street VARCHAR(30) NOT NULL,
//     municipality  VARCHAR(30) NOT NULL,
//     cityId INT(6) UNSIGNED,
//     FOREIGN KEY (cityId) REFERENCES Cities(id)
//     ); ";

//     if ($conn->query($sql7) === TRUE) {
//         echo "Table Places created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

// $sql8 = "CREATE TABLE FeedBack (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     tel VARCHAR(30) NOT NULL,
//     continent VARCHAR(30) NOT NULL,
//     state VARCHAR(30) NOT NULL,
//     helpful  VARCHAR(10) NOT NULL,
//     comment  VARCHAR(50) NOT NULL,
//     userId VARCHAR(20),
//     FOREIGN KEY (userId) REFERENCES Users(id)
//     ); ";

//     if ($conn->query($sql8) === TRUE) {
//         echo "Table FeedBack created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//      }



// $sql9 = "ALTER TABLE Places
// CHANGE name name VARCHAR(30);
//  ";

//     if ($conn->query($sql9) === TRUE) {
//         echo "Table places is altered";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }


// $sql10 = "ALTER TABLE Places
// CHANGE description description VARCHAR(30);
//  ";

//     if ($conn->query($sql10) === TRUE) {
//         echo "Table places is altered";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

// $sql11 = "ALTER TABLE Bookings
// ADD price VARCHAR(30);
//  ";

    // if ($conn->query($sql11) === TRUE) {
    //     echo "Table bookings is altered";
    //   } else {
    //     echo "Error creating table: " . $conn->error;
    //   }

// $sql12 = "ALTER TABLE Users ADD lv VARCHAR(5) NOT NULL CHECK (lv IN ('User','Admin'));";
// if ($conn->query($sql12) === TRUE) {
//     echo "Table Users is altered";
//   } else {
//     echo "Error altering table Users: " . $conn->error;
//   }

// $sql13 = "UPDATE Users SET lv = 'User' WHERE 1=1";
// if ($conn->query($sql13) === TRUE) {
//     echo "Table Users is updated";
//   } else {
//     echo "Error updating table Users: " . $conn->error;
//   }


// $sql14 = "ALTER TABLE Services ADD Logo VARCHAR(50) NOT NULL ";
// if ($conn->query($sql14) === TRUE) {
//     echo "Table Services is altered";
//   } else {
//     echo "Error altering table Services: " . $conn->error;
//   }

// $sql15 = "ALTER TABLE Hotels ADD COLUMN ID_Qyteti INT(6) UNSIGNED;
//           ALTER TABLE Hotels ADD COLUMN Logo VARCHAR(20);
//           ALTER TABLE Hotels ADD FOREIGN KEY qyteti REFERENCES Cities(id);";
//           if ($conn->multi_query($sql15) === TRUE) {
//     echo "Table Services is altered";
//   } else {
//     echo "Error altering table Services: " . $conn->error;
//   }

$sql16 = "ALTER TABLE Places Modify Logo VARCHAR(100);
	  ALTER TABLE Services MODIFY Logo VARCHAR(100);
	  ALTER TABLE Tour MODIFY src VARCHAR(100); ";
if ($conn->multi_query($sql16) === TRUE) {
    echo "Table Places is altered";
  } else {
    echo "Error altering table Places: " . $conn->error;
  }
$conn->close();
?>