<?php

include ('database.php');


  try{


    $stmt = $con->query('SELECT * FROM users');
    $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
     echo $employees[0]['name'];
     echo $employees[0]['age'];
     echo $employees[0]['username'];
     echo $employees[0]['password'];

  }catch(PDOException $e){

      echo"ERROR: " . $e->getMessage();
  }


?>