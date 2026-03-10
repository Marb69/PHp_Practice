<?php


include('database.php');


try {
    $stmt = $con->query("SELECT * FROM departments");
    $departments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h2>Departments</h2><ul>";
    foreach ($departments as $dep) {
        echo "<li>" . $dep['name'] . " - " . $dep['description'] . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
