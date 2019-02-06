<!DOCTYPE html>
<html>
<head><title> Admin Edit </title>

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
			<a href = "admin-home.php"><div id ="logo"></div></a>
			
				
		</div>
			
		<div class ="sidebar">
		<img src ="admin.ico" id ="img-src">
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
								
								<span id ="add"><img src ="add.png">Add
									
										<li><a href = "add-newplayer.php">Add Players</a></li>
										<li><a href = "add-user.php">Add Users</a></li>
									
								</span>
								
								<span id  =""><img src ="edit.png">Edit
										<li><a href = "admin-edit.php">Edit Players</a></li>
										<li><a href = "admin-edit-user.php">Edit Users</a></li>
								
								</span>
								<span id  =""><img src ="delete.png">Delete
										<li><a href = "admin-delete.php">Delete Players</a></li>
										<li><a href = "admin-delete-user.php">Delete Users</a></li>
								</span>
								
								<a href = "admin-view.php">
								<span id  =""><img src ="view.png">View All Players 
								</span>
								</a>
								
								<a href = "admin-manage.php">
								<span id  =""><img src ="manage.png">Manage Schedules
										
								</span>
								</a>
						

						
			
		
		
		</div>

		<div class ="activity_area">
			<center>
				<table>
				
				<tr>
					<th>#</th>
					<th>Username</th>
					<th>Password</th>
					<th></th>
				</tr>
							<?php 
							
							if(isset($_GET['page'])){
								$page =$_GET['page'];
							}else {
								$page = 1;
							}
							
							if($page ==''|| $page == 1){
								$page1 = 0;
							}else{
								$page1 = ($page*7)-7;
							}
							
							
							
							$db = mysqli_connect("localhost","root","");
									mysqli_select_db($db,'schools');
							//select
							$sql = 'SELECT * FROM accou ORDER BY ID ASC LIMIT '.$page1.',7';
							
							//exec
							
							$records = mysqli_query($db,$sql);
							
							while($row=mysqli_fetch_array($records))
							{
							?>
							 <form action="admin-edit-user.php" method="POST">
							<tr>
							   <td><input type="text" name="id" value="<?php echo $row['id']?>" style ="width:30px; border:none"readonly/></td>
							   <td><input type="text" name="username" value="<?php echo $row['username']?>" style ="width:120px; border:none"/></td>
							 <td><input type="text" name="password" value="<?php echo $row['password']?>" style ="width:120px; border:none" /></td>
							 <td><button type="submit" name="update" >SAVE</button></td>
							 </tr>
								</form>
				</center>
			
							<?php
							}
							
							
							//pagination
							$sql ='SELECT * FROM accou';
							$data = $db->query($sql);
							$records = $data->num_rows;
							$records_pages= $records/7;
							$records_pages =ceil($records_pages);
							
							
							echo '<ul class = "pagination">';
							if($records_pages >= 2) {
								for ($r=1; $r <= $records_pages; $r++){
									$active = $r == $page ? 'class="active"' : '';
									echo '<li><a href ="?page='.$r.'" '.$active.'>'.$r.'</a></li>';
								}
							}
							
							echo '<ul>';
							?>
						
				</div>
					
					
					</div>

	



	
</div>
<?php
$connection = mysqli_connect("localhost","root","");
	 mysqli_select_db($connection, 'schools');
	
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$username=$_POST['username'];
		$password=$_POST['password'];

		
	
	
	
	
	$query= "UPDATE accou SET id='$_POST[id]',username='$_POST[username]',password='$_POST[password]' where id='$_POST[id]'";
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
</body>
</html>