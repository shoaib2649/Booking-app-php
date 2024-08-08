<?php
include("config.php");
session_start();
// die();

$query="SELECT * FROM user_detail
 where fname='$re' ";

$run=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($run);

if(isset($_POST['submit']))
{
	

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$ext=$_POST['ext'];
$pass=$_POST['pass'];

$update="UPDATE user_detail SET first_name='$fname'
WHERE 
fname='$re' ";
 $run=mysqli_query($con,$update);
if($run)
{
	header("Location:dashboard.php");
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

		<div class="row offset-md-4 ">
		<form action="" method="POST">

	<label>firstname</label>
	<div class="input" >
		<input type="text" name="fname" value="<?php 
		echo $result['first_name'];?>">
	</div>
	<label>Lastname</label>
	<div class="input" >
		<input type="text" name="lname" value="<?php 
		echo $result['last_name'];?>">
	</div>
	<label>username</label>
	<div class="input" >
		<input type="text" name="username" value="<?php 
		echo $result['fname'];?>">
	</div>
	<label>Extention</label>
	<div class="input" >
		<input type="text" name="ext" value="<?php 
		echo $result['extention'];?>">
	</div>
	 <label>Password</label>
	<div class="input" >
		<input type="number" name="pass" value="<?php 
		echo $result['password'];?>">
	</div>
	<div class="submit">
		<input type="submit" name="submit">
	</div>
	</form>

	</div>

</div>
</body>
</html>