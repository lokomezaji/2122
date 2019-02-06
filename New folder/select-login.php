<!DOCTYPE html>
<html>
<head><title> Login </title>

<link rel = "stylesheet" href ="style.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/MyriadPro.font.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
</head>

<body>
<div id ="select-popup">
				<br><br><br><br>
				
						<div id = "login-form">
							
							<h1>Log in <br>as <br>Admin</h1>
							<a id ="close" onclick ="document.getElementById('select-popup').style.display='none'">X</a>
								<ul>
									
										<form method ="post" action = "admin_in.php">
							
										
										<label>Username:</label>
										<input type = "text" name ="username">
										<label>Password:</label>
										<input type = "password" name ="password">
										<button type ="submit" name ="submit" value ="LOGIN">LOGIN</button>
										<p> forgot password? </p>
										
										</form>
									
									
									
								</ul>
						</div>
				</div>
				
				<div id ="select-popup2">
				<br><br><br><br>
				
						<div id = "login-form">
						
							<h1>Log in <br>as <br>User</h1>
							<a id ="close" onclick ="document.getElementById('select-popup2').style.display='none'">X</a>
								<ul>
								
										<form method ="post" action = "user_in.php">
							
					
										<label>Username:</label>
										<input type = "text" name ="username">
										<label>Password:</label>
										<input type = "password" name ="password">
										<button type ="submit" name ="submit" value ="LOGIN">LOGIN</button>
										<p> forgot password? </p>
										
										</form>
									
									
									
								</ul>
						</div>
				</div>
				
<div class ="container">
	<div id ="timeline">
	
	<div class ="banner">
				<h1>WELCOME HUDYAKA 2019</h1>
				<br><br>
							<ul>
							<li><a id ="choice"
							onclick ="document.getElementById('select-popup').style.display='block'">ADMIN</a></li>
							<li><a id ="choice"
							onclick ="document.getElementById('select-popup2').style.display='block'">USER</a></li>
							</ul>
				</div>
				
				
		 <div class="slider-holder">
      <ul>
        <li>
          <div class="post-image"> <img src="css/images/background.jpg" alt="" /> </div>
          <div class="post-data">
          
            
          </div>
        </li>
        <li>
          <div class="post-image"> <img src="css/images/FB_IMG_15052887640979070.jpg" alt="" /> </div>
          <div class="post-data">
            
            
          </div>
        </li>
        <li>
          <div class="post-image"> <img src="css/images/FB_IMG_15052887711230732.jpg" alt="" /> </div>
          <div class="post-data">
            
          </div>
        </li>
      </ul>
      <div class="slider-frame">&nbsp;</div>
    </div>
    <div class="slider-navigation">
      <ul>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
		<div class ="header">
			<div id ="logo"></div>
			
		</div>
				
				
				
		

	</div>
<div id ="linebreak">

<p>SCHEDULE OF ACTIVITIES</p>
</div>
<div class = "hero">
	<div id = "schedules">
	<table>
	<?php
				$db = mysqli_connect("localhost","root","");
						mysqli_select_db($db,'schools');
				//select
				$sql = "SELECT * FROM schedules";
				
				//exec
				
				$records = mysqli_query($db,$sql);
				
				while($row=mysqli_fetch_array($records))
				{
					echo"<tr class = 'post1'>";
					
					echo"<td>".$row['post1']."</td>";
					echo"</tr>";
					
					echo"<tr class = 'post2'>";
					echo"<td>".$row['post2']."</td>";
					echo"</tr>";
					
					echo"<tr class = 'post3'>";
					echo"<td>".$row['post3']."</td>";
					echo"</tr>";
					
				}
?>
	</table>
	</div>
</div>

<div class ="another-break">
	<p>St. Peter's Seminary</p>
</div>

<div id ="another-hero">
	<span>
		<h1>Vision:</h1>
		
		<p> St.Peter's Seminary is a loving Antiqueño Diocesan
		and Priestly Formation Home where young men are nurtured to 
		grow in excellence, in integrity, in wisdom, communion, servant-leadership,
		and vocation clarity in order to become agents of renewal in the 
		Church and society.
		</p>
	</span>
	
	<span>
		<h1>Mission:</h1>
		
		<p> To provide holistic, relevant, and quality priestly formation
		programs, and initiatives in spiritual, academic, community, pastoral and huma formation
		aspects of seminary life.
		</p>
	</span>

	
	<div id ="a-h-pics">
		<img src = "12 (1).jpg">
		<img src = "12 (2).jpg">
	</div>

</div>





<div class = "footer">
	Copyright ○ 2019 | All Rights Reserved
</div>
</div>

</body>
</html>