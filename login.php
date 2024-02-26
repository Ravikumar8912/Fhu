<?php
// Check if the form is submitted
if(isset($_GET['submit'])) {
    // Get the form data
    $username = $_GET['username'];
    $password = $_GET['password'];

    // You should have a better way to store and check passwords, this is just a simple example
    // In a real application, you'd use password hashing
    $saved_username = 'user';
    $saved_password = 'password';

    // Check if the username and password match
    if($username === $saved_username && $password === $saved_password) {
        // Redirect to a success page or home page
        header("Location: welcome.php");
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: index.php?error=invalid_credentials");
        exit();
    }
} else {
    // If someone tries to access this page directly, redirect them to the login page
    header("Location: index.php");
    exit();
}
?>
