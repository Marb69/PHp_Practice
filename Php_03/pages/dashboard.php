<?php
  

    session_start();

    if(!isset($_SESSION['user'])){

     header('location: ../auth/page/login_page.php');

     exit();
    }
?>

<?php include '../partials/nav.php' ?>

<h1>Welcome to dashboard</h1>

<?php 
  
 $user = $_SESSION['user'];


   echo $user;
?>

<form action="../include/logout.php" method="POST">
    <button type="submit">Logout</button>
</form> 