<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts1/icomoon/style.css">

    <link rel="stylesheet" href="css1/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css1/style.css">

    <title>Login | Gold-dyx</title>
    	  <link href="../img/assets/favicon.ico" rel="icon" type="image/png" />
  </head>
  <body>
  
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
        $row = mysqli_fetch_assoc($result);
	$rows = mysqli_num_rows($result);
        if($row==1){
	    $_SESSION['username'] = $username;
            $_SESSION['profits'] = $row['profits'];
            // Redirect user to index.php
	    header("Location: dashboard.php");
         }else{
	echo "<div class='form'>
<h3>Email or Password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Gold-dyx</strong></h3>
            <p class="mb-4">You need to login in order to get access to your dashboard.</p>
            <form action="" method="post" name="login">
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="Email" id="email" name="email" required>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input name="submit" type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
            <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
          </div>
        </div>
      </div>
    

    <script src="js1/jquery-3.3.1.min.js"></script>
    <script src="js1/popper.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/main.js"></script>
<?php } ?>
</body>
</html>
