<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Homepage</title>
</head>

<body>



    <?php

    session_start();

    $page = $_GET['page'] ?? 'login';


    if ($page == 'dashboard') {

        if (!isset($_SESSION['user'])) {

            header('location:index.php?page=login');
            exit;
        }

        include './pages/dashboard.php';
    } elseif ($page == 'login') {

        include "./auth/login_page.php";
    } else {

        echo "Page not found";
    }
    ?>




</body>

</html>