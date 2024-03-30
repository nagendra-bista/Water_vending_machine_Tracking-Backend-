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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	:root{
    --text-color:hwb(204 4% 71%);
    --background-color:rgb(172, 205, 235);
    --nav-color:rgb(94, 174, 244);
    --second-text-color:rgb(11, 114, 155);
     }
	 body{
		background-image: url(Image/c.jpg);
		background-color: aliceblue;
		background-size: cover;
	 }
	#text{
		height: 35px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		font-size: 17px;
		margin-bottom: 10px;
	}

	#button, .sign{
		padding: 10px;
		width: 80px;
		color: hwb(204 4% 71%);
		background-color: var(--nav-color);
		border: none;
		cursor: pointer;
		border-radius: 5px;
		font-size: 17px;
		letter-spacing: 1.2px;
	}

	#box{
		background-color:rgb(172, 205, 235);
		margin: 50px auto 0px auto;
		height: 350px;
		width: 350px;
		padding: 20px;
		color: black;
	}
	.btn{
		text-align: center;
		font-size: 17px;
	}
	
	 .sign{
		padding: 10px 16px;
		font-size: 18px;
		letter-spacing: 1.2px;
		margin-top: 30px;
		/* background-color: red; */
        }

        #button:hover, .sign:hover{
            background-color: rgb(78, 153, 214);
            color: hwb(204 4% 71%);
			transition: .5s;
        }
       
        a{
            text-decoration: none;
            color:hwb(204 4% 71%) ;
			margin-top: 30px;
	
        }

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 25px;margin: 20px;color: hwb(204 4% 71%);">Login</div>

			<input id="text" type="text" name="user_name" placeholder="User Name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<div class="btn">
				<span>Dont have an Account?</span>
				<br><br>
			<a href="signup.php" class="sign">Signup</a>
			</div>
		</form>
	</div>
</body>
</html>