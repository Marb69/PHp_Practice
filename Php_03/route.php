
<?php 

   $page = $_GET['page'] ?? 'dashboard';

   switch($page){

           case 'dashboard':
           header('location:/pages/dashboard.php');
           break;


   };
?>