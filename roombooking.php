<?php
include("config.php");
$query="SELECT * from room";
$run=mysqli_query($con,$query);
$fet=mysqli_fetch_all($run,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">

	<div class="col-md-6 offset-md-2 ">
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Room NO</th>
      <th scope="col">Capicity</th>
      <th scope="col">Add Booking</th>
      
    </tr>
  </thead>

            <?php
            {
            	foreach ($fet as $key) {
            	
            	echo "<tbody>";
                echo "<tr>";
                echo "<td>{$key['room_no']}</td>";
                echo "<td>{$key['capicity']}</td>";
                echo "<td><a href='booking.php?no={$key['room_no']}'>view </a></td>"; 
                echo "<tr>"; 
                echo "<tbody>";  
            }
            }
            ?>
	</table>
	</div>
	</div>
	</div>

</body>
</html>