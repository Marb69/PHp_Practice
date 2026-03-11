<?php

session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';


    if ($username === 'admin' && $password === 'admin123') {

        $_SESSION['user'] = $username;
         
        header('location:../pages/dashboard.php');
   exit;
       
       
    }else{


     
       
       
    }
}
