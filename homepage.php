<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #07443E">
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome, <?php echo $_SESSION['username']; ?>!</h3></center>
		
		<form action="index.php" method="post">
			<div class="inner_container">
				<button class="logout_button" type="logout">Log Out</button>
<?php

if(isset($_POST['logout'])){
					session_destroy();
				}
?>				
				
			</div>
		</form>
		<div> </br> </div>
		<?php include 'Books.php'; ?>
	</div>
</body>
</html>
