<?php


  $page = $_GET['page'] ?? 'login';

switch ($page) {


    case 'login':

        include 'login_form.php';
        break;

        case 'dashboard':
            include 'dashboard.php';
            break;
}
