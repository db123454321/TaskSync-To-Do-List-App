<?php
$host = 'localhost';
$db = 'tasksync'; // Change this to your database name
$user = 'root'; // Default for XAMPP
$pass = ''; // Default for XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>