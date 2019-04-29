<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}

ob_start();
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FANTASTIC FOUR HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
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
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
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
                        <a class="active-menu" href="settings.php"><i class="fa fa-dashboard"></i>User Dashboard</a>
                    </li>
					
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           CUSTOMER<small> accounts </small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <?php
						include ('db.php');
						$sql = "SELECT * FROM `credential` where userType = 'customer'";
						$re = mysqli_query($con,$sql)
				?>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>User name</th>
                                            <th>Password</th>
                                            <th>User Type</th>
											<th>Update password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
                                    $id = 0;
										while($row = mysqli_fetch_array($re))
										{
										
											$us = $row['username'];
											$ps = $row['password'];
											$tp = $row['userType'];
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
													<td>".$us."</td>
													<td>".$ps."</td>
													<td>".$tp."</td>
													
                                                    <td><button class='btn btn-primary btn' data-toggle='modal' data-userid=".$us." data-target='#myModal'>
                                                    Update 
                                                  </button></td>
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$us."</td>
                                                    <td>".$ps."</td>
													<td>".$tp."</td>
                                                    <td><button class='btn btn-primary btn' data-toggle='modal' data-userid=".$us." data-target='#myModal'>
                                                    Update 
                                                  </button></td>
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
                    <div class="panel-body">
                            
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Update Password</h4>
                                        </div>
										<form method="post">

                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Username</label>
                                            <input name="hduname" autocomplete="off" class="form-control" readonly="readonly" required>
											</div>
										</div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Enter new password</label>
                                            <input name="pass" type="password"  maxlength="20" autocomplete="off" class="form-control" required>
											</div>
										</div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>Change Password</label>
                                            <input name="cpass" type="password"  maxlength="20" autocomplete="off" class="form-control" required>
											</div>
                                        </div>
										
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           <input type="submit" name="up" value="Update" class="btn btn-primary">
										  </form>
										   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
				 </div>
            </div>
            <?php 
				if(isset($_POST['up']))
				{
					$pass = $_POST['pass'];
					$cpass = $_POST['cpass'];
					$cruname = $_POST['hduname'];
                    
                    if($pass!="$cpass")
                    {
                        echo' <script language="javascript" type="text/javascript"> alert("password not match") </script>';
                    }
                    else{

                            $upsql = "UPDATE `credential` SET `password`='$pass' WHERE username = '$cruname'";
                            if(mysqli_query($con,$upsql))
                            {
                            echo' <script language="javascript" type="text/javascript"> alert("password updated") </script>';
							echo "<script type='text/javascript'> window.location='usersetting.php'</script>";
                            }
                            else{
                            echo' <script language="javascript" type="text/javascript"> alert("Error while updating password") </script>';
                            }
                                
                        }
				}
				ob_end_flush();
				
				?>
                         

            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
<script language="javascript" type="text/javascript">$('#myModal').on('show.bs.modal', function(e) {
    var userid = $(e.relatedTarget).data('userid');
    $(document).find('input[name="hduname"]').val(userid);
});</script>
