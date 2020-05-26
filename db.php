<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "travelKosovo";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
// $sql = "CREATE DATABASE travelKosovo";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// sql to create table
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
//     tel VARCHAR(50)
//     ); ";

    
    // if ($conn->query($sql) === TRUE) {
    //   echo "Table Users created successfully";
    // } else {
    //   echo "Error creating table: " . $conn->error;
    // }
    
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

// sql to create table
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

// sql to create table
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

//     if ($conn->query($sql11) === TRUE) {
//         echo "Table bookings is altered";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }


$conn->close();
?>