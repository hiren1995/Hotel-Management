<?php
 session_start();  
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRATION FANTASTIC FOUR HOTEL</title>
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
                        <a  href="../index.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a  href="index.php"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
					</ul>
            </div>
        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            REGISTER <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form"  autocomplete="off" method="post">

                        <div class="form-group">
                                            <label>Username</label>
                                            <input name="uname" maxlength="20" autocomplete="false" class="form-control" required>
                                            
                               </div>
                               <div class="form-row">
                               <div  class="form-group col-md-6" style="padding-left: 0;">
                                            <label>Password</label>
                                            <input name="pass" type="password"  maxlength="20" autocomplete="off" class="form-control" required>
                                            
                               </div>
                               <div  class="form-group col-md-6">
                                            <label>Confirm Password</label>
                                            <input name="cpass"  type="password"  maxlength="20" autocomplete="off" class="form-control" required>
                                            
                               </div>
                               </div>
							  <div class="form-group">
                                            <label>Full Name</label>
                                            <input name="fname"  maxlength="45" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Date Of Birth</label>
                                            <input name="dob" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email"  maxlength="45" placeholder="name@example.com" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Address</label>
                                            <input name="addr"  maxlength="45" class="form-control" required>
                                            
                               </div>
                         
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone"  data-regex="[^0-9]+" maxlength="10" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                
                  
            <div class="row">
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							    $code1=$_POST['code1'];
                                $code=$_POST['code']; 
                                
                                $pass=$_POST['pass'];
                                $cpass=$_POST['cpass']; 
                                $status = true;
							    if($code1!="$code")
							    {
                                $msg="Invalide code"; 
                                $status = false;
                                }
                                else if($pass!="$cpass")
                                {
                                    $msg="Password does not match"; 
                                    $status = false;
                                }
							    else
							    {
                                    $status = true;
							    		$check="SELECT * FROM credential WHERE username = '$_POST[uname]'";
							    		$rs = mysqli_query($con,$check);    
							    		$data = mysqli_fetch_array($rs, MYSQLI_ASSOC);
							    		if(mysqli_num_rows($rs) > 0) {
							    			echo "<script type='text/javascript'> alert('User Already Exists')</script>";
							    		}
							    		else
							    		{
                                            $newUser="INSERT INTO `credential`(`username`, `password`,`userType`) VALUES ('$_POST[uname]','$_POST[pass]','CUSTOMER')";
							    			 if (mysqli_query($con,$newUser))
							    			{
                                              $result = mysqli_query($con,"SELECT COUNT(*) as result from customer");
                                              $row = mysqli_fetch_row($result);
                                              $id = $row[0];
                                              $id =  $id + 1;
                                            
                                            $newCustomer="INSERT INTO `customer`(`customerID`,`name`,`address`,`dateOfBirth`,`email`,`customerUsername`) VALUES ('$id','$_POST[fname]','$_POST[addr]', STR_TO_DATE('$_POST[dob]', '%Y-%m-%d'),'$_POST[email]','$_POST[uname]')";
                                            
                                            if (mysqli_query($con,$newCustomer))
							    			{
                                                echo "<script type='text/javascript'> alert('customer has been created successfully. Please login to continue')</script>";
                                            }
                                            else{
                                                
                                                echo '<script type="text/javascript"> alert("Error adding user in database : '. mysqli_error($con) .'")</script>';
                                                debug_to_console(mysqli_error($con));
                                            }
                                        
                                            }
                                            else{
                                                echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                                debug_to_console(mysqli_error($con));
                                            }
                                        
							    		}
                                    
                                }
                                
                                if($status == false && isset($msg) && $msg != "")
                                {
                                                echo "<script type='text/javascript'> alert('". $msg ."')</script>";
                                                $msg = "";  
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
            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>
