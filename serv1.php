<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "config.php";
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * from services inner join tour on tour.idserv=services.id WHERE services.name=?";
    
    if($stmt = $conn->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"].'';
       
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            // Check number of rows in the result set
            echo "<h3>".$param_term."</h3>";
            if($result->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    echo "<div id='start'>
                    <img src='".$row["src"]."'>
                    <p id='t2'>". $row["header"]."</p>
                    <p id='text2'>".$row["content"]."</p>
                </div>";
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