<?php
session_start();
$conn = new mysqli('localhost', 'your_username', 'your_password', 'your_database');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Here you would typically send an email to the user with instructions to reset their password.
    echo "A password reset link has been sent to $email.";
}
?>
