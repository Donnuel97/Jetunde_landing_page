<?php
// config.php

$host = 'localhost'; // Database host
$dbname = 'highfledge'; // Database name
$username = 'emma'; // Database username
$password = '12345'; // Database password

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
