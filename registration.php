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

    <title>Register | Gold-dyx</title>
    	  <link href="../img/assets/favicon.ico" rel="icon" type="image/png" />
  </head>
  <body>
  
<?php
require('db.php');
// If form submitted, insert values into the database.

if (isset($_REQUEST['email'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div id='card' class='form'>

<div id='upper-side'>
   <i class="fa fa-check"></i>
   <h3 id='status'> Success </h3> 
</div>

  <div id='lower-side'>
    <p id='message'>
      Congratulations, your Gold-dyx account has been successfully created.
    </p>
    <a href='login.php' id="contBtn">Login</a>
  </div>
</div>";
        }
    }else{
?>

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Register on <strong>Gold-dyx</strong></h3>
            <p class="mb-4">You need to create an account in order to start investing.</p>
            <form action="" method="post" name="registration">
              <div class="form-group first">
                <label for="username">Name</label>
                <input type="text" class="form-control" placeholder="Name" id="username" name="username" required>
              </div>

               <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" placeholder="Email" id="username" name="email" required>
              </div>

              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
              </div>
              
            

              <input name="submit" type="submit" value="Register" class="btn btn-block btn-primary">

            </form>
            <p>Already have an account? <a href='login.php'>Login</a></p>
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
