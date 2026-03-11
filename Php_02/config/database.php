<?php


   $host = 'localhost';
   $user = 'root';
   $password = '';
   $dbname = 'ems_user';
   $charset = 'utf8mb4';

   $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

   $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // show errors as exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch as associative array
    PDO::ATTR_EMULATE_PREPARES   => false,                  // use real prepared statements
];



  try {
    
      $pdo = new PDO($dsn,$user,$password,$options);
      echo 'Connected';
    
  } catch (PDOException $e) {
    
     echo $e->getMessage();
  }
?>