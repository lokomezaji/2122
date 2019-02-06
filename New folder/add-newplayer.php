<!DOCTYPE html>
<html>
<head><title> Admin Home </title>

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
		
					<form method="POST" action ="add.admin.php">
				
				<br>
				<center><h2>REGISTER PLAYER</h2></center>
				<br><br>
				<div id = "input-names">
				<ul>
				<li>First Name:</li>
				<li>Middle Name:</li>
				<li>Last Name:</li>
				<li>Contact Number:</li>
				<li>Address:</li><br>
				<li>Select Game:</li>
				<li>School:</li>
				</ul>
				</div>
				<div id ="text-input">
				<input type ="text" name="fname"/>
				<input type ="text" name="mname" />
				<input type ="text" name="lname"/>
				<input type ="text" name="number"/>
				<input type ="text" name="address"/><br>
				<select id="game" name="game">
					<option value="volleyball">Volleyball</option>
				    <option value="basketball">Basketball</option>
				    <option value="tabletennis">Table Tennis</option>
					<option value="sepak">Sepak Takraw</option>
					<option value="Badminton">Badminton</option>
				    </select>
					<br><br>
				<select id="id" name="id">
					<option value="1">sac</option>
				    <option value="2">james</option>
				    <option value="3">sanpedro</option>
					<option value="4">ans</option>
					<option value="5">AntiqueVocationalSchool</option>
				    </select>
					
					<br><br>
					<button type ="submit" id = "add" name ="submit">Add Player</button>
				</div>
				
				</form>
		
		</div>

	</div>

				






</body>
</html>