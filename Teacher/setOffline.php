<?php
$con=mysqli_connect('localhost','root','','querybox') or die("something went wrong");
$fid=$_GET['fid'];
$query="UPDATE `faculty` SET `available`=0 WHERE `f_id`=$fid";
mysqli_query($con,$query) or die("query failed to execute");
?>