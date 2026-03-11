

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ems_user";


try {

    $con = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully";
} catch (PDOException $e) {

    die('Connection failed: ' . $se->getMessage());
}


?>