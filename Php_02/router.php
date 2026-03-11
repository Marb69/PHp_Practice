<?php





$page = $_GET['page'] ?? 'login';


switch ($page) {

   case 'dashoboard':
      $page = 'pages/dashboard.php';
      break;

   default:
      $page = 'pages/dashboard.php';
      break;
}
