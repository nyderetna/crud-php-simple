<?php
//including the database connection file
include_once("config.php");

// var_dump($_POST['name']);die();

$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$age = mysqli_real_escape_string($mysqli, $_POST['age']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$createdAt = new Date();
var_dump($name,$age,$email,$createdAt);die();
	
// checking empty fields
if(empty($name) || empty($age) || empty($email)) {
			
	if(empty($name)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}
	
	if(empty($age)) {
		echo "<font color='red'>Age field is empty.</font><br/>";
	}
	
	if(empty($email)) {
		echo "<font color='red'>Email field is empty.</font><br/>";
	}
	
	//link to the previous page
	echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
} else { 
	// if all the fields are filled (not empty) 


		
	//insert data to database	
	$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email,createdAt) VALUES('$name','$age','$email','$createdAt')");
	
	//display success message
	//echo "<font color='green'>Data added successfully.";
	//echo "<br/><a href='index.php'>View Result</a>";
}