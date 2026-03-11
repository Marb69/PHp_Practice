<?php

require_once '../config/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';


    $stmt = $pdo->prepare('SELECT * FROM admin WHERE name = :username');
    $stmt->execute(['username'=> $username]);
    $user = $stmt->fetch();

    if($user){

    

        if($password === $user['password']){

           header('location: ../pages/dashboard.php');
           
        }else{

          header('location:../index.php?error=invalid');
        
          exit;
        }

    }else{

      echo 'user not exist';
    }
}
