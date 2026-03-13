<?php

include 'auth_check.php';

if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php?page=login");
    exit;
}