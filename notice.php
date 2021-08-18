<?php
$con=mysqli_connect("localhost","root","", "isro") or die("could not con");

$date1=$_REQUEST["dt1"];
$sub1=$_REQUEST["name1"];
$statement1=$_REQUEST["comp1"];


$result=mysqli_query($con,"SELECT COUNT(*) from notice");
$row=mysqli_fetch_assoc($result);
$size=$row['COUNT(*)'];
$nid=$size+1;

mysqli_query($con,"insert into notice values('$nid','$date1','$sub1','$statement1')");
print "data inserted successfully";
mysqli_close($con);
?>

