<?php



session_start();

$page = $_GET['page'] ?? 'login';

if (!isset($_SESSION['user'], $_SESSION['role']) && $page != 'login') {
    header("Location: index.php?page=login");
    exit;
}

  if (isset($_SESSION['user'], $_SESSION['role']) && $page == 'login' ) {


    if ($_SESSION['role'] == 'admin') {
        header("Location: index.php?page=admin");
        exit;
    } else {

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
    <link rel="stylesheet" href="./assets/css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>


<?php  


   if(isset($_SESSION['role']) ){
   
     if($_SESSION['role'] == 'admin'){
         include './partials/nav.php';
     }else{

        
     }
   }
 
  ?>




    <?php include "router.php" ?>



    <script type="module" src="./assets/js/main.js"></script>

</body>

</html>