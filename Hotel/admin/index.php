<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SUN RISE ADMIN</title>

  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <div class="container">
      <div id="login">
        <form method="post">
          <fieldset class="clearfix">
          <div class="form-group">
            <p><span class="fontawesome-user"></span><input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" name="sub"  value="Login"></p>
            <p style = "text-align: center;   margin-bottom: 1em;"><a href="register.php">do not have account? </a></p>
            <p><a role="button" href="../index.php" style="width: 280px;" class="btn btn-info">Back </a></p>
            </div> 
          </fieldset>
        </form>
      </div> <!-- end login -->
    </div>
 <div class="bottom">  <h3><a href="../index.php">Hotel Name Login Page</a></h3></div>
  
 <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
  
</body>
</html>

<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT * FROM credential WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $userData =  mysqli_fetch_array($result);
         $_SESSION['user'] = $myusername;
         $_SESSION['userType'] = $row['userType'];
        if($row['userType'] == 'ADMIN')
        {
          header("location: home.php");
        }
        else{
          header("location: ..\index.php");
        }
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>
