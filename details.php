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
        $query = "INSERT into `users` (name)
VALUES ('$name')";
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
<form name="registration" action="" method="post">
<input type="text" name="amount" placeholder="Amount To Withdraw" required />
<input type="text" name="bank" placeholder="Wallet Address" required />
<input type="text" name="name" placeholder="Full Name" required />

<input type="submit" name="submit" value="Submit" />
</form>
</div>
<?php } ?>
</body>
</html>
