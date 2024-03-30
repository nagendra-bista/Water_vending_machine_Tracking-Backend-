<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creater A new Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<style></style>
    
    <form action="" method="post">
        <legend>Register Your Account </legend>
        <br>
        
        <input type="text" name="firstname" id="firstname" placeholder="First Name" class="firstname" required> 
        <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="lastname" required>
<br>

        <input type="email" name="email" id="email" placeholder="E-mail" class="form" required>
        <br><br>
        <input type="text" name="user_name" id="user_name" placeholder="User Name" class="form" required>
        <br><br>
        <input type="password" name="password" id="password" placeholder="Password" class="form" required>
        <br><br>
        <input type="checkbox" name="checkbox" id="checkbox" class="checkbox" required> <span> I accept the terms of use and privacy policy </span>
    <br><br>
        <input type="submit" value="Register" class="register"> <br><br>
		<a href="login.php">Click to Login</a><br><br>
    </form>

	<!-- <div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div> -->
    
    
</body>
</html>