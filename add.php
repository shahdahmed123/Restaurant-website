<?php


        


   $CustomerName = $_POST["fname"];
   $LastName = $_POST["lname"];
   $CustomerEmail = $_POST["email"];
   

  $connection = new mysqli("localhost", "root", "", "restaurant");

 $stmt = $connection->prepare("insert into customer_info(Customer_Name,lastname,Customer_Email) values(?,?,?)" );
$stmt->bind_param("sss",$CustomerName,$LastName, $CustomerEmail);
$stmt->execute();
  echo("done");

  




    ?>
