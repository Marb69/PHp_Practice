<?php

session_start();
include '../config/db.php';




try {

    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);



    foreach ($users as $user) {




        if ($user['role'] == $role) {


            if ($user['username'] == $username && $user['password'] == $password) {

                $_SESSION['user'] = $username;
                $_SESSION['role'] = $role;
                if ($role == 'admin') {

                    header('location: ../index.php?page=admin');

                    exit();
                } elseif ($role == 'employee') {

                    header('location: ../index.php?page=profile');
                    exit;
                }
            }else{

                 header('location: ../index.php?page=login');
                 exit;
            }
        }
    }
} catch (PDOException $e) {

    echo 'ERROR: ' . $e;
}
