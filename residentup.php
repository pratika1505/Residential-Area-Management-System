<?php
session_start();
?>
<?php
 $con=mysqli_connect("localhost","root","", "isro") or die("could not con");
          $ph=$_REQUEST['phone1'];
          $email=$_REQUEST['email1'];
          $ps=$_REQUEST['pass1'];
          $xi=$_SESSION["varn"];
          echo $xi;
         
          $qry= ("UPDATE resident 
          SET 
          phone = '$ph', email= '$email' WHERE user_name = '$xi'");
          $res=mysqli_query($con,$qry);
         
          print "data inserted successfully";
       

          $conn=mysqli_connect("localhost","root","", "isro") or die("could not con");
          
          
          $qry=("UPDATE login_table
            SET 
            password = '$ps' WHERE user_name = '$xi'");
mysqli_query($conn,$qry);
print "data inserted successfully";
mysqli_close($con);
  mysqli_close($conn);
     ?>
