<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #07443E">	
	<div id="main-wrapper">
	<center><h2>Sign Up Form</h2></center>
		<form action="register.php" method="post">
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<div></br></div>
				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>
				<div></br></div>
				<label><b>Phone No</b></label>
				<input type="text" placeholder="Enter Phone No" name="phone" required>
				<div></br></div>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<div></br></div>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required>
				<div></br></div>
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				
				<a href="index.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$email=$_POST['email'];
				@$phone=$_POST['phone'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				if($password==$cpassword)
				{
					$query = "SELECT * FROM user WHERE username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
							
						}
						
						else if(strlen($password)<6)
						{
	                         echo '<script type="text/javascript">alert("Password must be at least 6 characters long!")</script>';
	                           }
							
	
	                    else if(strlen($username)<3){
	                         echo '<script type="text/javascript">alert("Username must be at least 3 characters!")</script>';
	                          }
	                    else if(preg_match('/[^a-z0-9]+/i',$username))
						{
		                      echo '<script type="text/javascript">alert("Username must only contain alpahbets and numbers")</script>';
	                           }
	
	                    else if(strlen($phone)<11)
						{
	                          echo '<script type="text/javascript">alert("Phone no is too short")</script>';
	                        }
	                    else if(preg_match('/[^0-9]+/i',$phone)) 
	                   {
		                      echo '<script type="text/javascript">alert("Phone no can only contain numbers")</script>';
	                        }
							
						
						else
						{    
							
							$query = "INSERT INTO user(`username`,`email`,`phone`,`password`) VALUES ('$username','$email','$phone','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['email'] = $email;
								$_SESSION['phone'] = $phone;
								$_SESSION['password'] = $password;
								header( "Location: homepage.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
						
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
	
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
				
			}
			else
			{
			}
			?>
	</div>
</body>
</html>
