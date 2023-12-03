<?php
	session_start();
	require_once('config.php');
?>


<!DOCTYPE html>
<html>
<head>
<title>Customer Service</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #07443E">
	<div id="main-wrapper">
		<form action="service.php" method="post">
		
			<div class="inner_container">
			<div><h1> <strong> <center> Welcome to Customer Service <center> </h1> </strong> </br> </div>
			<div></br></div>
			<label><b>Report</b></label>
				<div></br></div>
				<input type="text" name="report" required >
				<button name="register" class="sign_up_btn" type="submit">Report</button>
				<a href="contact.php"><button type="button" class="register_btn">Contact Us</button></a>
				<a href="index.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				@$report=$_POST['report'];
				$query = "INSERT INTO service(`report`) VALUES ('$report')";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					
								echo '<script type="text/javascript">alert("Report Submitted,Thank You!")</script>';
								$_SESSION['register'] = $report;
								//header( "Location: index.php");
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
	</div>
</html>
