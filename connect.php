<?php
$servername = "localhost:3306"; // Replace with your server name
$username = "vogubizf_apex"; // Replace with your MySQL username
$password = "HESUS@786"; // Replace with your MySQL password
$database = "vogubizf_main_db"; // Replace with your database name



$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    throw new Exception("Connection failed: " . $conn->connect_error);
    echo '<script>';
    echo 'alert("Error connecting to the database: ' . $e->getMessage() . '");';
    echo '</script>';
    
    
    
}

  // Connection successful
echo '<script>';
echo 'alert("Database connection successful!");';
echo '</script>';
