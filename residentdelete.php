<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","", "isro") or die("could not con");

$ph=$_REQUEST["phone1"];
$email=$_REQUEST["email1"];
$pass=$_REQUEST["pass1"];


$result=mysqli_query($con,"SELECT * from resident where site_no = $site");
$row=mysqli_fetch_assoc($result);
$u={$row['user_name']};?>
<?php echo  $_SESSION["user6"];?> 


<?php
$qry=UPDATE resident 
SET 
    name = $name, phone = $ph, email= $email, username=$uname
WHERE
    site_no = $site;
mysqli_query($con,$qry)");
print "data inserted successfully";
mysqli_close($con);
$con=mysqli_connect("localhost","root","", "isro") or die("could not con");
$qry=UPDATE login_table
SET 
    user_name = $uname, password = $uname, user_type=$utype
WHERE
    user_name = $u;
mysqli_query($con,$qry)");
print "data inserted successfully";
mysqli_close($con);
?>