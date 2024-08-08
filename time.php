<?php
include("config.php");
$query="SELECT * From booking";
$data=mysqli_query($con,$query);
$fet=mysqli_fetch_assoc($data );
echo "<pre>";
 $type=date($fet['start']);
echo $second=strtotime($type);
echo "</br>";
// echo $second;
// die();
$endtype=$fet['end'];
$end=strtotime($endtype);
echo $end;
$diff=$end-$second;
echo $diff;
?>