<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead

$userData = array();
while ($row = mysqli_fetch_array($result)) {
  $userData[] = array(
    "id" 	=> $row['id'],
    "name" 	=> $row['name'],
    "age"  	=> $row['age'],
    "email" => $row['email'],
    "createdAt" => $row['createdAt']
  );
}

echo json_encode($userData);
?>