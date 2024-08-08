<?php
include("config.php");
include("header.php");

session_start();
echo $_SESSION['access_level'];


if($_SESSION['access_level']=='admin')
{

$query="SELECT * From booking";
$data=mysqli_query($con,$query);
$fet=mysqli_fetch_all($data,MYSQLI_ASSOC);
}

if($_SESSION['access_level']=='staff')
{
$query="SELECT * From booking where fname=
'{$_SESSION["fname"]}' ";
$data=mysqli_query($con,$query);
$fet=mysqli_fetch_all($data,MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> Booked Room</title>
</head>
<body>
	<div class="container">
		<div class="row">
			
	 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">BookingID</th>
      <th scope="col">User Name</th>
      <th scope="col">Room No</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      
    </tr>
  </thead>

            <?php
            {
            	foreach ($fet as $key) {
            	echo "<tbody>";
                echo "<tr>";
                echo "<td>{$key['bk_id']}</td>";
                echo "<td>{$key['fname']}</td>";
                echo "<td>{$key['room_no']}</td>";
                echo "<td>{$key['start']}</td>";
                echo "<td>{$key['end']}</td>";
                echo "</tr>"; 
                echo "</tbody>";  
            }
            }
            ?>
	</table>

		</div>
	</div>
</body>
</html>