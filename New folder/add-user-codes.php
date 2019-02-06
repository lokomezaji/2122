<?php
session_start();
$db = mysqli_connect("localhost","root","", "schools");


if(isset($_POST["submit"])){
	
	
	$username=$_POST["username"];
	$password=$_POST["password"];

	
	
	if (empty($username)){
	echo 'fname is required</br>';
	}
	if (empty($password)){
	echo 'mname is required</br>';
	}	


else
		$sql = "INSERT INTO accou (username,password) value ('$username','$password')";
		mysqli_query($db, $sql);
		echo '<script>alert("User successfully registered")</script>';
		}
		header("Location: add-user.php"); // Redirecting To Add
?>