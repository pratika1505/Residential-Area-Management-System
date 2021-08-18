<?php
// Start the session
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","isro") or die("could not con");
if(isset($_POST['Login']))
{
	$user=$_POST['Uname'];
	$password=$_POST['Pass'];
	$usertype=$_POST['usertype'];
	$query="SELECT * FROM `login_table` WHERE user_name= '".$user."' and password= '".$password."' and user_type= '".$usertype."'";
	$_SESSION["user6"] = $user;
        
	$result=mysqli_query($con, $query);
      	if($result==TRUE)
		{
			while($row = mysqli_fetch_array($result))
			{
				echo '<script type="text/javascript">alert("Logged In Successfully") </script>';
		
				if($usertype=="admin")
				{
				?>
					<script type="text/javascript">
					window.location.href = "dashb_ad.php";
					</script>
					<?php

				}
				else if($usertype=="resident")
				{
				?>
					<script type="text/javascript">
					window.location.href="dashb_res.php";
					</script>
				<?php
		
				}
			}
			echo "wrong entry";

		}
}
?>


