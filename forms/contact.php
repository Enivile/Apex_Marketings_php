<?php
$servername = "localhost:3306"; // Replace with your server name
$username = "vogubizf_apex"; // Replace with your MySQL username
$password = "HESUS@786"; // Replace with your MySQL password
$database = "vogubizf_main_db"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare and execute the SQL statement to insert the form data into the table
$sql = "INSERT INTO leads (name, phone, email, subject, message) VALUES ('$name','$phone', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Form data inserted successfully.");</script>';
} else {
    echo " " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
