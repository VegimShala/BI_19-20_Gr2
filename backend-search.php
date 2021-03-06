<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "config.php";
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT hotels.name,hotels.address,hotels.tel,hotels.logo FROM hotels inner join cities on cities.id=hotels.ID_Qyteti WHERE cities.name LIKE ?";
    
    if($stmt = $conn->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
       
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            // Check number of rows in the result set
            if($result->num_rows > 0){
                // Fetch result rows as an associative array
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
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