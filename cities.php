<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "config.php";
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * from cities WHERE id=?";
    
    if($stmt = $conn->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"];
       
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            // Check number of rows in the result set
            if($result->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    echo " <p><strong>City: </strong> <em>".$row["name"]."</em></p>
                    <p><strong>Location: </strong> <em>".$row["location"]."</em></p>
                    <p><strong>ZipCode: </strong> <em>".$row["zipcode"]."</em></p>
                    <p><strong>Visit: </strong> <em>".$row["trait"]."</em></p>";
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