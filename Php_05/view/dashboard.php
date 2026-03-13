<?php

include './middleware/admin.php';


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>




   


  <?php  

  $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
  
    switch ($page){

       case 'admin';
       include './page/admin/dashboard.php';
       exit;
       break;

        case 'all_employee';
       include './page/admin/all_employee.php';
       exit;
       break;
    }

    echo $page;
  ?>
