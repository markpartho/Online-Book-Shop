<?php
$output= NULL;
 if(isset($_POST['submit'])){
	$mysqli = NEW MYSQLi("localhost","root","","book");

$search = $mysqli->real_escape_string($_POST['search']);

$resultSet = $mysqli->query("SELECT * FROM books WHERE category LIKE '$search%'");
if($resultSet->num_rows >0 ){
while($rows = $resultSet->fetch_assoc())
{
$Title = $rows['title'];
$Author = $rows['author'];
$Price = $rows['price'];
$output .= "Title: $Title<br /> Author: $Author<br /> Price : $Price<br /><br />";
}
}else{
$output = "No results";
}

}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#07443E">
	<div id="main-wrapper">
	<div><h1> <strong> <u> <center> Select your book <center> </u> </h1> </strong> </div>
	<center><h2>Search Books</h2>
		<form action="books.php" method="post">
		
			<div class="inner_container">
			</div>
		</form>
<form method="POST">
<input type="TEXT" name="search" placeholder="Search by Category" required />
<div> </br> </div>
<input type="SUBMIT" name="submit" value="Search" />
</form>
</br>
<?php echo $output; ?>
</center>
</body>
</html>