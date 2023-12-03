<?php
	session_start();
	require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #07443E">
	<div id="main-wrapper">
	<h2 class="mt-4" style= "color:BLACK"><i><marquee loop=10 SCROLLDELAY=20 HEIGHT=40 behavior="slide" direction="left" BGCOLOR=WHITE>Welcome to BookLovers</marquee><i/></h2>
	<center><h2>Login Form</h2></center>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<div></br></div>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<div></br></div>
				<button class="login_button" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="register_btn">Register New User</button></a>
				<a href="service.php"><button type="button" class="register_btn">Customer Service</button></a>
			</div>
		</form>

		<div class="signature">
        <br/>
        <p><center><h3><strong>Follow us: <a href="https://www.facebook.com/Booklovers">www.facebook.com/Booklovers</a></h3></strong></Center></p> 
    	</div>
		
		<?php
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from user where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					//echo "UserName: ".$_SESSION['username']." ".$username."password: ".$_SESSION['password']." ". $password;
					
					//header( "Location: homepage.php");
					echo("<script>window.location.href = 'homepage.php';</script>");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
			
		?>
</body>
</html>
