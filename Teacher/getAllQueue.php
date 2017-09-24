<?php
$con=mysqli_connect('localhost','root','','querybox') or die("something went wrong");
$fid=$_REQUEST['fid'];
$query="SELECT * FROM STUDENT WHERE sid in(select sid from querys where fid=$fid)";
$result=mysqli_query($con,$query) or die("query failed to execute");
while($row=mysqli_fetch_assoc($result))
{
    echo "<br>".$row['name'];
}

?>