<?php
// Define PDO MYSQL_ATTR_INIT_COMMAND if not defined.
if (!defined('MYSQL_ATTR_INIT_COMMAND')) {
    define('MYSQL_ATTR_INIT_COMMAND', 1002);
}

// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'shiptech2');

// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set PDO to throw exceptions on error.
    $image_url = '../uploads/';
    $image_url_user = 'uploads/';
    $emailusername = '';
    $emailpassword = '';
    echo "Connected to the database."; // This will indicate that the database connection was successful.
} catch (PDOException $e) {
    // Output the error message for debugging.
    echo "Connection failed: " . $e->getMessage();
    // You can log the error to a file or take appropriate action here.
    // exit("Error: " . $e->getMessage()); // Uncomment this if you want to stop execution upon a database connection error.
}
?>

