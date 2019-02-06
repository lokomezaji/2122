<?php
$connection = mysqli_connect("localhost","root","");
	 mysqli_select_db($connection, 'schools');
	
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$number=$_POST['number'];
		$address=$_POST['address'];
		$game=$_POST['game'];
		
	
	
	
	
	$query= "UPDATE sac SET id='$_POST[id]',fname='$_POST[fname]',mname='$_POST[mname]',lname='$_POST[lname]',number='$_POST[number]',address='$_POST[address]', game='$_POST[game]' where id='$_POST[id]'";
	$query_run = mysqli_query($connection,$query); 
	if($query_run)
	{
		echo '<script>alert("data updated")</script>';
		header ("refresh:1; url=admin-edit.php");
	}
	else
	{
		echo '<script>alert("data not updated")</script>';
	}
	}
?>