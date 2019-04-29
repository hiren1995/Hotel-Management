<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fantastic Four HOTEL</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
              <a href="../index.php"><i class="fa fa-home"></i> Home</a>
            </li>
                    <li>
                        <a href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
				
                    <li>
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    

                    
            </div>

        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          Pending Payment Details<small> </small>
                        </h1>
                    </div>
                </div> 
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Room Number</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>Room type</th>
                                            <th>Bed Type</th>
                                            <th>Check in</th>
											<th>Check out</th>
                                            <th>Rent</th>
                                            <th>Make Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
										$sql="SELECT t1.*,t3.*,t2.startDate,t2.endDate
                                              FROM room t1
                                              inner join customer_has_room t2 ON t2.roomNumber  = t1.roomNumber
                                              inner join customer t3 ON t3.customerID  = t2.customerID
                                              LEFT JOIN bill t4 ON t4.customerID  = t2.customerID
                                              WHERE t4.customerID IS NULL ORDER BY t1.roomNumber;
                                              ";
                                        $re = mysqli_query($con,$sql);
                                    $id = 0;
										while($row = mysqli_fetch_array($re))
										{
                                            $cin = date("m-d-y", strtotime($row['startDate']));
                                            $cout = date("m-d-y", strtotime($row['endDate']));
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['roomNumber']."</td>
													<td>".$row['name']."</td>
													<td>".$row['email']."</td>
													<td>".$row['roomType']."</td>
													<td>".$row['occupancy']."</td>
													<td>".$cin."</td>
													<td>".$cout."</td>
													<td>".$row['pricePerNight']."</td>
													<td><a href='pay.php?rid=".$row['roomNumber']."&cid=".$row['customerID']."' <button class='btn btn-primary'> <i class='fa fa-credit-card' ></i> Pay</button></td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
                                                <td>".$row['roomNumber']."</td>
                                                <td>".$row['name']."</td>
                                                <td>".$row['email']."</td>
                                                <td>".$row['roomType']."</td>
                                                <td>".$row['occupancy']."</td>
                                                <td>".$cin."</td>
                                                <td>".$cout."</td>
                                                <td>".$row['pricePerNight']."</td>
                                                <td><a href='pay.php?rid=".$row['roomNumber']."&cid=".$row['customerID']."' <button class='btn btn-primary'> <i class='fa fa-credit-card' ></i> Pay</button></td>
                                                </tr>";
											
                                            }
                                            $id++;
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
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
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
