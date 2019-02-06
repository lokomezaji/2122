<?php
session_start();

$db = mysqli_connect("localhost","root","", "schools");

$username = $_SESSION["username"];
$query=mysqli_query($db ,"SELECT * FROM accou WHERE username='$username'");
$row=mysqli_fetch_array($query);
$id =$row["id"];

if(isset($_POST["submit"])){
	
	
	$fname=($_POST["fname"]);
	$mname=($_POST["mname"]);
	$lname=($_POST["lname"]);
	$number=($_POST["number"]);
	$address=($_POST["address"]);
	$game=($_POST["game"]);

	
	
	if (empty($fname)){
	echo( "First Name is required");
	}
	if (empty($mname)){
	echo( "Middle Name is required");
	}	
	if (empty($lname)){
	echo( "Last Name is required");
	}	
	if (empty($number)){
	echo( "Number is required");
	}
	if (empty($address)){
	echo( "Address is required");
	}		
	if (empty($game)){
	echo( "Game is required");
	}



	else
		$sql = "INSERT INTO sac (fname,mname,lname,number,address,game,useer_id) value ('$fname','$mname','$lname','$number','$address','$game','$id')";
		mysqli_query($db, $sql);
		echo '<script>alert("Player successfully registered")</script>';
		}
		header("Location: user-add.php"); // Redirecting To Add
		
?>