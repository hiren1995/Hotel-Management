<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]) || !isset($_GET["cid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$rid = $_GET['rid'];
                $cid = $_GET['cid'];
				$custID = $cid;
				$sql = "SELECT t1.*,t3.*,t2.startDate,t2.endDate from customer t1 
				inner join customer_has_room t2 on t2.customerID  = t1.customerID 
				inner join room t3 on t3.roomNumber = t2.roomNumber where t2.roomNumber = '$rid' and t2.customerid = '$custID'";
				
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$fname = $row['name'];
					$email = $row['email'];
					$address = $row['address'];
					$dob = $row['dateOfBirth'];
					$roomNo = $row['roomNumber'];
					$roomtype = $row['roomType'];
					$bed = $row['occupancy'];
					$price = $row['pricePerNight'];
					$cin = $row['startDate'];
					$cout = $row['endDate'];
				}
		
	}
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					<?php  
            if($_SESSION["userType"] == "ADMIN")
					{
					echo"
                        <li><a href='usersetting.php'><i class='fa fa-user fa-fw'></i> User Profile</a>
                        </li>
                        <li><a href='settings.php'><i class='fa fa-gear fa-fw'></i> Settings</a>
                        </li>
                        <li class='divider'></li>";
					}
					?> 
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li>
              <a href="../index.php"><i class="fa fa-home"></i> Home</a>
            </li>
                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
					<?php  
if($_SESSION["userType"] == "ADMIN")
{
echo"
<li>
  <a href='payment.php'>
    <i class='fa fa-qrcode'>
    </i> Payment
  </a>
</li>";
}
?> 
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
					</ul>

            </div>

        </nav>

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Payment<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Payment Conformation
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $fname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Address </th>
                                            <th><?php echo $address; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Date Of Birth </th>
                                            <th><?php echo date("m-d-y", strtotime($dob)); ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Room No </th>
                                            <th><?php echo $roomNo; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Type Of the Room </th>
                                            <th><?php echo $roomtype; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Bedding </th>
                                            <th><?php echo $bed; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Price </th>
                                            <th><?php echo $price; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-in Date </th>
                                            <th><?php echo date("m-d-y", strtotime($cin)); ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Check-out Date</th>
                                            <th><?php echo date("m-d-y", strtotime($cout)); ?></th>
                                            
                                        </tr>
                                </table>
                            </div>
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
							<input type="submit" name="pay" value="Pay" class="btn btn-success">
							</form>
                        </div>
                    </div>
					</div>
                </div>
                </div>
         </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
</body>

</html>

<?php
						if(isset($_POST['pay']))
						{	
                            $accIdCheck = "SELECT * from accountant limit 1;";
                            $accIdRes = mysqli_query($con,$accIdCheck);
                            if(mysqli_num_rows($accIdRes) > 0) {

                                $resultID = mysqli_fetch_array($accIdRes,MYSQLI_NUM);
                                $accId = $resultID[0];

                                $result = mysqli_query($con,"SELECT COUNT(*) as result from bill");
                                              $row = mysqli_fetch_row($result);
                                              $Billid = $row[0];
                                              $Billid =  $Billid + 1;

                                $newPayment = "INSERT INTO `bill`(`billID`, `dateOfPayment`, `costOfBill`, `customerID`,`accountantID`) VALUES ('$Billid',CURDATE(),'$price', '$custID','$accId');";

                                if (mysqli_query($con,$newPayment))
                                {
                                    echo '<script type="text/javascript"> alert("Payment completed successfully")</script>';
									echo "<script type='text/javascript'> window.location='payment.php'</script>";
                                }
                                else{
                                    echo '<script type="text/javascript"> alert("Error adding payment details in database")</script>';
                                }

                            }
                            else{
									echo "<script type='text/javascript'> alert('Accountant not found ')</script>";
                            }
						}
							
						?>