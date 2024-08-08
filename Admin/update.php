
<?php
include("config.php");
if(isset($_POST['submit']))
{
	

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$ext=$_POST['ext'];
$pass=$_POST['pass'];

$update="UPDATE user_detail set first_name='$fname',last_name='$lname',fname='$username',extention='$ext',password='$pass' where $_SESSION['fname']";
 $run=mysqli_query($con,$update);
 if($run)
 {
 	echo " success";
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
	<title>Signup</title>
</head>
<body>
	<div class="container">
		
		<form action="" method="POST">
			
		<div class="row offset-md-4 ">
	
	
	<label>firstname</label>
	<div class="input" >
		<input type="text" name="fname">
	</div>
	<label>Lastname</label>
	<div class="input" >
		<input type="text" name="lname">
	</div>
	<label>username</label>
	<div class="input" >
		<input type="text" name="username">
	</div>
	<label>Extention</label>
	<div class="input" >
		<input type="text" name="ext">
	</div>
	 <label>Password</label>
	<div class="input" >
		<input type="number" name="pass">
	</div>
	<div class="submit">
		<input type="submit" name="submit">
	</div>
	<div class="login">
		<div>
		<span>or</span>
		

		<a href="login.php">Login</a>
	</div>
	</div>
	</form>
</div>
</body>
</html>