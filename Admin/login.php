
<?php
session_start();
include("config.php");
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$pass=$_POST['pass'];


$query="SELECT * from user_detail 
where fname='$fname' AND password='$pass'";

$run=mysqli_query($con,$query);
$fet=mysqli_fetch_assoc($run);
$access=$fet['access_level'];

$_SESSION['fname']=$fname;
$_SESSION['access_level']=$access;

if(mysqli_num_rows($run)>0)
{
	header("Location:../bkroom.php");
}
else  {
	echo '<div class="alert alert-success" role="alert">
 password and name is not matched
</div>';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>login</title>
</head>
<body>
	<div class="container">
		<div class="row offset-md-4 ">
	
	<form action="" method="POST">
	<label>Name</label>
	<div class="input" >
		<input type="text" name="fname">
	</div>
	<label>password</label>
	<div class="input">
		<input type="text" name="pass">
	</div>

	
	<div class="update"><a href="update.php?name=$fet['fname']">Edit</a></div>
	<div class="submit">
		<input type="submit" name="submit">
	</div>
</form>
</div>

</div>
</body>
</html>
