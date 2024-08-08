<?php
// $dy=300;
// $m=15;
// $start=strtotime("sunday");

// $endtime=strtotime("$dy min",$start);
// echo $endtime;

// while ($start<$endtime)
// {
// 	echo date("d m Y h:i:s",$start)."<br>";
// 	$start=strtotime("$m min",$start);
// }

// die();
include("config.php"); 
// $query="SELECT * FROM booking";
// $data=mysqli_query($con,$query);
// $fet=mysqli_fetch_all($data,MYSQLI_ASSOC);
// echo "<pre>";
// $fet['end'];
// echo "</pre>";
// die();

if(isset($_POST['submit']))
{
$username=$_POST['username'];
$room_no=$_GET['no'];
$startime=$_POST['stime'];
$endtime=$_POST['endtime'];





$query="INSERT INTO booking(fname,room_no,start,end) 
values('$username','$room_no','$startime','$endtime')";
$store=mysqli_query($con,$query);
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
	
	<label>username</label>
	<div class="input" >
		<input type="text" name="username">
	</div>
	<!-- <label>Room NO</label>
	<div class="input" >
		<input type="text" name="rno">
	</div> -->
	<label>StartTime</label>
	<div class="input" >
		<input type="datetime-local" name="stime">
	</div>
	<label>EndTime</label>
	<div class="input" >
		<input type="datetime-local" name="endtime">
	</div>
	 
	<div class="submit">
		<input type="submit" name="submit">
	</div>
	
	</form>
		</div>
	</div>
</body>
</html>