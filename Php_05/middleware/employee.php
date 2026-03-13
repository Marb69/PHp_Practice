<?php

include 'auth_check.php';

if ($_SESSION['role'] !== 'employee') {
    header("Location: index.php?page=login");
    exit;
}