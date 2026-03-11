<?php
  

    session_start();

    if(!isset($_SESSION['user'])){

     header('location: ../auth/page/login_page.php');

     exit();
    }
?>

<h1>Welcome to dashboard</h1>

<form action="../include/logout.php" method="POST">
    <button type="submit">Logout</button>
</form>