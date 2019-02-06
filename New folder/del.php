<?php 
$id="";
//connection
	$con = mysqli_connect('localhost','root','');
	//db
			mysqli_select_db($con,'schools');
	//select
	$sql = "DELETE FROM sac WHERE id='$_GET[id]'";
	
	//exec

if(mysqli_query($con,$sql))
	echo '<script>alert("Deleted")</script>';
	header("Location: admin-delete.php"); // Redirecting To Home Page
?>
