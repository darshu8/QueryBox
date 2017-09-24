<?php
$con=mysqli_connect('localhost','root','','querybox') or die("something went wrong");
$fid=$_REQUEST['fid'];
$sid=$_REQUEST['sid'];

$query="INSERT INTO QUERYS VALUES('$sid','$fid')";

$result=mysqli_query($con,$query) or die("query failed to execute");
echo "Query Submitted";

?>