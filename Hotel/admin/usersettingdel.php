<?php


include ('db.php');

			
			$uname =$_GET['eid'];		
			$newsql ="DELETE FROM `credential` WHERE username ='$uname' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
				}
			header("Location: usersetting.php");
		
?>


