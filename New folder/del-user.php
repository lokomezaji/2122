<?php 
$id="";
//connection
	$con = mysqli_connect('localhost','root','');
	//db
			mysqli_select_db($con,'schools');
	//select
	$sql = "DELETE FROM accou WHERE id='$_GET[id]'";
	
	//exec

if(mysqli_query($con,$sql))
	echo '<script>alert("Deleted")</script>';
	header("Location: admin-delete-user.php"); // Redirecting To Home Page
?>
