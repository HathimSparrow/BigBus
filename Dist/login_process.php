<?php
session_start();

// Dummy credentials for validation (replace with database query in real application)
$validEmail = "admin@gmail.com";
$validPassword = "12345678";

// Get data from the form
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Validate user credentials
if ($email === $validEmail && $password === $validPassword) {
    // Credentials are valid
    $_SESSION['user'] = $email; // Store user session
    header("Location: admin.php");
    exit();
} else {
    // Invalid credentials
    echo "<script>alert('Invalid email or password. Please try again.'); window.history.back();</script>";
}
?>
