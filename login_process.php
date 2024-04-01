<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$username = "user123";
$password = "password123";

if ($_POST["username"] === $username && $_POST["password"] === $password) {
    
    header("Location: thank_you.php");
    exit();
} else {
    
    header("Location: login.php?error=1");
    exit();
}
} else {

header("Location: login.php");
exit();
}

?>
