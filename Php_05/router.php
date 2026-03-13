<?php




$page = $_GET['page'];


if ($page == "login") {
    include "./auth/login_page.php";
} elseif ($page == "admin") {


    include "./view/dashboard.php";
} elseif ($page == "profile") {

    include "./view/profile.php";
} elseif ($page == 'all_employee') {

    include "./page/admin/all_employee.php";
} elseif ($page == "add_employee") {

    include "./page/admin/add_employee.php";
}
