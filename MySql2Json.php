<?php

require_once "config.php"; 
$query = "SELECT * FROM Users;";
$result = mysqli_query($conn,$query);
$user_data = array();
while($row = mysqli_fetch_array($result))
{
    $user_data[] = array(
        'id' => $row["id"],
        'fullname' => $row["fullname"],
        'username' => $row["username"],
        'email' => $row["email"],
        'pass' => $row["pass"]
    );

}
$encoded = json_encode($user_data);

$fileName = "Users.json";
if(file_put_contents($fileName,$encoded))
{
    echo $fileName ." file has been created";
}
else
{
    echo $fileName ." file has not been created";
}



?>