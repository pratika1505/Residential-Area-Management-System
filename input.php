<?php
$con=mysqli_connect("localhost","root","", "isro") or die("could not con");


$s_type1=$_REQUEST["st1"];
$name=$_REQUEST["nam1"];
$phno1=$_REQUEST["phno"];
$stype= strtoupper($s_type1);

$result=mysqli_query($con,"SELECT COUNT(*) from service where phone = $phno1");
$row=mysqli_fetch_assoc($result);
$size=$row['COUNT(*)'];
if($size>0)
{
  echo "Data already exist";
}
else
{
$result=mysqli_query($con,"SELECT COUNT(*) from service");
$row=mysqli_fetch_assoc($result);
$size=$row['COUNT(*)'];
$sid=$size+1;
mysqli_query($con,"insert into service values('$sid','$stype','$name','$phno1')");
print "data inserted successfully";
mysqli_close($con);
}
?>
