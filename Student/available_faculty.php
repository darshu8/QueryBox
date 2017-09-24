<?php
$con=mysqli_connect('localhost','root','','querybox') or die("something went wrong");

$query="SELECT * FROM FACULTY WHERE available=1";
$result=mysqli_query($con,$query) or die("query failed to execute");
while($row=mysqli_fetch_assoc($result))
{
    echo "<br>".$row['fname'];
}

?>