<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "config.php";
if(isset($_REQUEST["term"])){
    // Prepare a select statement
   
    $sql = "SELECT * FROM services  WHERE type = 'Activities'";
     $result = $conn->query($sql);
            // Check number of rows in the result set
            if($result->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result->fetch_array()){
                    echo "<option value='.$row["name"].'>.$row["name"].</option>";
                 

                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error();
        }
    }
    // Close statement
    $stmt->close();
}
// Close connection
$conn->close();
?>