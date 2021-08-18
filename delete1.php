<?php
$con=mysqli_connect("localhost","root","","isro") or die("could not con");
if(isset($_POST['del']))
{
	$query="DELETE * FROM `resident` WHERE user_name= '".$del."'";
        
	$result=mysqli_query($con, $query);
      	if($result)
		{
			while($row = mysqli_fetch_array($result))
			{
                echo '<script type="text/javascript">alert("Record Deleted In Successfully") </script>';
			}
		}
			echo "Site no does not exist";
}
?>