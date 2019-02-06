<?php
	session_start();
	$errors = array();
	$username = "";
//connect to the database
	$db = mysqli_connect('localhost','root','','schools');
//login
	if (isset($_POST['submit'])) {
		$username = ($_POST['username']);
		$password = ($_POST['password']);
		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		
		// if there are no errors, save to database
		if (count($errors) == 0) {
			$query = "SELECT * FROM accou WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db,$query);
			if (mysqli_num_rows($result) == 1){
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now LOGGED IN";
				header ('location:user-home.php');//homepage
			}else {
				array_push($errors, "wrong password/username");
			}
		}
	}
		
?>