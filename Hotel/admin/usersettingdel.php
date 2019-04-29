<?php


include ('db.php');

			
			$uname =$_GET['eid'];		
			$newsql ="DELETE FROM `credential` WHERE username ='$uname' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("User Deleted") </script>';
				}
			header("Location: usersetting.php");
		
?>


