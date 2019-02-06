<?php
session_start();
$db = mysqli_connect("localhost","root","", "schools");


if(isset($_POST["submit"])){
	
	
	$post1=$_POST["post1"];
	$post2=$_POST["post2"];
	$post3=$_POST["post3"];

	
	
	if (empty($post1)){
	echo 'post1 is required';
	}
	if (empty($post2)){
	echo 'post2 is required';
	}	
	if (empty($post3)){
	echo 'post3 is required';
	}	


else
		$sql = "INSERT INTO schedules (post1,post2,post3) VALUE ('$post1','$post2','$post3')";
		mysqli_query($db, $sql);
		echo '<script>alert("Schedule Added")</script>';
		}
		header("Location: admin-manage.php"); // Redirecting To Add
?>