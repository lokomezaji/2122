<?php
session_start();

$db = mysqli_connect("localhost","root","", "schools");

if(isset($_POST["submit"])){
	
	
	$fname=($_POST["fname"]);
	$mname=($_POST["mname"]);
	$lname=($_POST["lname"]);
	$number=($_POST["number"]);
	$address=($_POST["address"]);
	$game=($_POST["game"]);
	$id=($_POST["id"]);

	
	
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
	if (empty($id)){
	echo( "id is required");
	}


	else
		$sql = "INSERT INTO sac (fname,mname,lname,number,address,game,useer_id) value ('$fname','$mname','$lname','$number','$address','$game','$id')";
		mysqli_query($db, $sql);
		echo '<script>alert("Player successfully registered")</script>';
		}
		header("Location: add-newplayer.php"); // Redirecting To Add
		
?>