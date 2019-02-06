<!DOCTYPE html>
<html>
<head><title> User - Edit Player </title>

<link rel = "stylesheet" href ="style.css">

</head>

<body>
				<div id ="select-popup">
						<div id = "out-confirmation">
							<p>Are you sure you want to LOGOUT?</p>
							<ul>
							<li><a href ="admin_out.php" id ="choice">Yes</a></li>
							<li><a href ="" id ="choice"
							onclick ="document.getElementById('select-popup').style.display='none'">No</a></li>
							</ul>
						</div>
				</div>
				
	<div class ="container">

		<div id ="header">
			<a href = "user-home.php"><div id ="logo"></div></a>
			
				
		</div>
			
		<div class ="sidebar">
		<img src ="user.png" id ="img-src">
			<div id ="box">
						
						<div id ="user_identity">
							<?php
							session_start();
							$db = mysqli_connect("localhost","root","", "schools");

							if($_SESSION["username"]==true)

							{
							echo "Welcome "." ".$_SESSION["username"];
							}

							?>
							</div>
			</div>
								<span id ="logout" style = "cursor:pointer;"
								onclick ="document.getElementById('select-popup').style.display='block'">Logout</span>
								
								<a href = "user-add.php">
								<span id ="add"><img src ="add.png">
									
								Add Players
								</span>
								</a>
								
								<a href = "user-edit.php">
								<span id  =""><img src ="edit.png">
										Edit Players
								</span>
								</a>
								
								<a href = "user-delete.php">
								<span id  =""><img src ="delete.png">
										Delete Players
								</span>
								</a>
								
								<a href = "user-viewall.php">
								<span id  =""><img src ="view.png">
									Players Registered
								</span>
								</a>
								
						

						
			
		
		
		</div>

		<div class ="activity_area">
		</div>
			</div>

				






</body>
</html>


<?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection, 'schools');
	
	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$number=$_POST['number'];
		$address=$_POST['address'];
		$game=$_POST['game'];
		
	
	
	
	
	$query= "UPDATE sac SET fname='$_POST[fname]',mname='$_POST[mname]',lname='$_POST[lname]',number='$_POST[number]',address='$_POST[address]', game='$_POST[game]' where id='$_POST[id]'";
	$query_run = mysqli_query($connection,$query); 
	if($query_run)
	{
		echo '<script>alert("data updated")</script>';
		header ("refresh:1; url=user-edit.php");
	}
	else
	{
		echo '<script>alert("data not updated")</script>';
	}
	}
?>