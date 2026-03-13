<?php
session_start();

$page = $_GET['page'] ?? 'login';

if (!isset($_SESSION['user'], $_SESSION['role']) && $page != 'login') {
    header("Location: index.php?page=login");
    exit;
}

if (isset($_SESSION['user'], $_SESSION['role']) && $page == 'login') {


    if ($_SESSION['role'] == 'admin') {
        header("Location: index.php?page=dashboard");
        exit;
    }else{

         header("Location: index.php?page=profile");
         exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <title>Document</title>
</head>

<body>




    <?php


    ?>

    <script src="script.js"></script>

</body>

</html>