

<!DOCTYPE html>
<html>
<head><title> Admin View </title>

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
			
							<form action = "admin-view.php" method = "POST">
							
							<input type = "text" name = "searchNow">
							<input type = "submit" name = "search">
								
								
								
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
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Number</th>
		<th>Address</th>
		<th>Game</th>
		<th>ID</th>
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
								$page1 = ($page*10)-10;
							}
							
							
	if (isset($_POST['search']))
	{
		$searchNow = $_POST['searchNow'];
		$query = "SELECT * FROM `sac` WHERE CONCAT (`fname`, `mname`, `lname`, `number`,`address`, `game`,`useer_id`) LIKE '%".$searchNow."%'";
		$search_result = filterTable($query);
	}
	
	else {
		$query = 'SELECT * FROM sac ORDER BY ID ASC LIMIT '.$page1.',10';
		$search_result = filterTable($query);
	}
	
	function filterTable ($query)
	{
		$db = mysqli_connect("localhost","root","");
				mysqli_select_db($db,'schools');
		$filter_Result = mysqli_query($db, $query);
		return $filter_Result;
	}
			
							
							
						
				
				while($row=mysqli_fetch_array($search_result))
				{
					echo"<tr>";
					echo"<td>".$row['fname']."</td>";
					echo"<td>".$row['mname']."</td>";
					echo"<td>".$row['lname']."</td>";
					echo"<td>".$row['number']."</td>";
					echo"<td>".$row['address']."</td>";
					echo"<td>".$row['game']."</td>";
					echo"<td>".$row['useer_id']."</td>";
					
				}
				
				//pagination
							$sql ='SELECT * FROM sac ';
							$data = $db->query($sql);
							$records = $data->num_rows;
							$records_pages= $records/10;
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
			
		</center>
		
		</div>
	</form>
	
	
	</div>

				






</body>
</html>