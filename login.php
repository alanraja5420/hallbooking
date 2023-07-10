<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Add your login logic here
    // Example: Validate username and password against a database
    // You can replace the placeholder logic with your own implementation

    if ($username == "admin" && $password == "password") {
        // Successful login
        echo "Login successful";
    } else {
        // Invalid login
        echo "Invalid username or password";
    }
}
?>
