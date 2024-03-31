<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username and password are correct
    $username = "user123";
    $password = "password123";

    if ($_POST["username"] === $username && $_POST["password"] === $password) {
        // Redirect to the thank you page on successful login
        header("Location: thank_you.php");
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // Redirect back to the login page if accessed directly
    header("Location: login.php");
    exit();
}
?>
