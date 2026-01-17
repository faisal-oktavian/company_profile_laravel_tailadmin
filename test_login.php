<?php
// Quick test script to verify user exists in database

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DATABASE'];

try {
    $mysqli = new mysqli($host, $user, $password, $database);
    
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    echo "Database connection successful!\n";
    
    $result = $mysqli->query("SELECT id, email, name FROM users");
    
    if (!$result) {
        die("Query error: " . $mysqli->error);
    }
    
    echo "\nUsers in database:\n";
    echo str_repeat("-", 60) . "\n";
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " | Email: " . $row['email'] . " | Name: " . $row['name'] . "\n";
    }
    echo str_repeat("-", 60) . "\n";
    
    $mysqli->close();
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
