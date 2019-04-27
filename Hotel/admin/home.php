<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
header("location:index.php");
}
include('db.php');
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard	
    </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
            <span class="sr-only">Toggle navigation
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
          </button>
          <a class="navbar-brand" href="home.php"> 
            <?php echo $_SESSION["user"]; ?> 
          </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
              <i class="fa fa-user fa-fw">
              </i> 
              <i class="fa fa-caret-down">
              </i>
            </a>
            <ul class="dropdown-menu dropdown-user">
            <?php  
            if($_SESSION["userType"] == "ADMIN")
{
echo"
              <li>
                <a href='usersetting.php'>
                  <i class='fa fa-user fa-fw'>
                  </i> User Profile
                </a>
              </li>
              <li>
                <a href='settings.php'>
                  <i class='fa fa-gear fa-fw'>
                  </i> Settings
                </a>
              </li>
              <li class='divider'>
              </li>";
}
?> 
              <li>
                <a href="logout.php">
                  <i class="fa fa-sign-out fa-fw">
                  </i> Logout
                </a>
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
              <a href="../index.php">
                <i class="fa fa-home">
                </i> Home
              </a>
            </li>
            <li>
              <a class="active-menu" href="home.php">
                <i class="fa fa-dashboard">
                </i> Status
              </a>
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
</li>
<li>
  <a  href='profit.php'>
    <i class='fa fa-qrcode'>
    </i> Profit
  </a>
</li>";
}
?> 
            <li>
              <a href="logout.php">
                <i class="fa fa-sign-out fa-fw">
                </i> Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- /. NAV SIDE  -->
      <div id="page-wrapper">
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <h1 class="page-header">
                Current 
                <small>Room Booking 
                </small>
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <button class="btn btn-default" type="button">
                              Room Bookings  
                            </button>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                        <div class="panel-body">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>Room Number
                                      </th>
                                      <th>Name
                                      </th>
                                      <th>Email
                                      </th>
                                      <th>Room
                                      </th>
                                      <th>Bedding
                                      </th>
                                      <th>Check In
                                      </th>
                                      <th>Check Out
                                      </th>
                                      <th>More
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $tsql = "SELECT t2.roomNumber,t1.customerID,t1.name,t1.email,t3.roomType,t3.occupancy,t2.startDate,t2.endDate from customer t1 
                                    inner join customer_has_room t2 on t2.customerID  = t1.customerID 
                                    inner join room t3 on t3.roomNumber = t2.roomNumber;
                                    ";
                                    if($_SESSION["userType"] == "CUSTOMER")
                                    {
                                      $user = $_SESSION["user"];
                                      $tsql = "SELECT t2.roomNumber,t1.customerID,t1.name,t1.email,t3.roomType,t3.occupancy,t2.startDate,t2.endDate from customer t1 
                                      inner join customer_has_room t2 on t2.customerID  = t1.customerID 
                                      inner join room t3 on t3.roomNumber = t2.roomNumber where t1.customerUsername = '$user';
                                      ";
                                    }

                                    $tre = mysqli_query($con,$tsql);
                                    while($trow=mysqli_fetch_array($tre) )
                                    {	
                                      $cin = date("m-d-y", strtotime($trow['startDate']));
                                      $cout = date("m-d-y", strtotime($trow['endDate']));
                                    echo"<tr>
                                    <th>".$trow['roomNumber']."</th>
                                    <th>".$trow['name']."</th>
                                    <th>".$trow['email']."</th>
                                    <th>".$trow['roomType']."</th>
                                    <th>".$trow['occupancy']."</th>
                                    <th>".$cin."</th>
                                    <th>".$cout."</th>
                                    <th><a href='roombook.php?rid=".$trow['roomNumber']."%".$trow['customerID']."' class='btn btn-primary'>CheckOut</a></th>
                                    </tr>";
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
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <script src="assets/js/jquery-1.10.2.js">
  </script>
  <script src="assets/js/bootstrap.min.js">
  </script>
  <script src="assets/js/jquery.metisMenu.js">
  </script>
  <script src="assets/js/morris/raphael-2.1.0.min.js">
  </script>
  <script src="assets/js/morris/morris.js">
  </script>
  <script src="assets/js/custom-scripts.js">
  </script>
  </body>
</html>
