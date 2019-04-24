<?php
session_start();  
if(isset($_SESSION["user"]) == false)  
{  
     header("location:index.php");  
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION SUNRISE HOTEL</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                  
            <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Guest House">GUEST HOUSE</option>
												<option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">Single</option>
                                                <option value="2">Double</option>
												<option value="3">Triple</option>
                                                <option value="4">Quad</option>
												<option value="2">None</option>
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                            </select>
                              </div>
							 
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                               <input type="submit" name="submit" class="btn btn-primary">
                               </div>
                       </div>
                        
                </div>
                <?php
                        include('db.php');

							if(isset($_POST['submit']))
							{
                                if($_SESSION['userType'] != 'ADMIN')
                                {
                                           $check="SELECT t1.*
                                           FROM room t1
                                           LEFT JOIN customer_has_room t2 ON t2.roomNumber  = t1.roomNumber
                                           and (t2.startDate between STR_TO_DATE('$_POST[cin]', '%Y-%m-%d') and STR_TO_DATE('$_POST[cout]', '%Y-%m-%d') or t2.endDate between STR_TO_DATE('$_POST[cin]', '%Y-%m-%d') and STR_TO_DATE('$_POST[cout]', '%Y-%m-%d')) 
                                           WHERE t2.roomNumber IS NULL and t1.roomType = '$_POST[troom]' and t1.occupancy = '$_POST[bed]'  ORDER BY t1.roomNumber LIMIT 1 ;";

                                       $rs = mysqli_query($con,$check);

                                       if(mysqli_num_rows($rs) > 0) {

                                           $user = $_SESSION['user'];

                                           $custIdCheck = "SELECT * from customer where customerUsername = '$user';";
                                           $custIdRes = mysqli_query($con,$custIdCheck);

                                           if(mysqli_num_rows($custIdRes) > 0) {

                                               $resultID = mysqli_fetch_array($custIdRes,MYSQLI_NUM);
                                               $custId = $resultID[0];

                                               while($row= mysqli_fetch_array($rs))
                                               {
                                                   $roomNumber = $row['roomNumber'];
                                                   $newRoomBook = "INSERT INTO `customer_has_room`(`customerID`, `roomNumber`, `startDate`, `endDate`) VALUES ('$custId','$roomNumber',STR_TO_DATE('$_POST[cin]', '%Y-%m-%d'),STR_TO_DATE('$_POST[cout]', '%Y-%m-%d'));";
                                                   if (mysqli_query($con,$newRoomBook))
                                                   {
                                                       echo "<script type='text/javascript'> alert('Your Booking application has been done, your room number is : ".$roomNumber."')</script>";
                                                   }
                                                   else
                                                   {
                                                       echo "<script type='text/javascript'> alert('Error Booking Room')</script>";
                                                   }
                                               }
                                           }else{
                                               echo "<script type='text/javascript'> alert('Customer information not available for selected current user')</script>";
                                       }
                                   }else{
                                               echo "<script type='text/javascript'> alert('Room not available for selected criteria')</script>";
                                        }
                                }
                                else{
                                    echo "<script type='text/javascript'> alert('Admin cannot book room')</script>";
                             }

                            }
                            
                            function debug_to_console( $data ) {
                                $output = $data;
                                if ( is_array( $output ) )
                                    $output = implode( ',', $output);

                                echo '<script>console.log( "Debug Objects: ' . $output . '" );</script>';
                            }
							?>
						</form>
							
            </div>
           
                </div>
				
					</div>
            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>
