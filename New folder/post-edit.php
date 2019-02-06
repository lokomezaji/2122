<?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection, 'schools');
	
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$post1=$_POST['post1'];
		$post2=$_POST['post2'];
		$post3=$_POST['post3'];
		
		
	
	
	
	
	$query= "UPDATE `schedules` SET post1='$_POST[post1]',post2='$_POST[post2]',post3='$_POST[post3]' where id='$_POST[id]'";
	$query_run = mysqli_query($connection,$query); 
	if($query_run)
	{
		echo '<script>alert("data updated")</script>';
		header ("refresh:1; url=admin-manage.php");
	}
	else
	{
		echo '<script>alert("data not updated")</script>';
	}
	}
?>