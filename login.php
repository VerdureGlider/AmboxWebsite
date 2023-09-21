<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "ambox_db");

// Handle user login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Query the database for user
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // User authenticated
        // Redirect to homepage or user dashboard
    } else {
        // Invalid credentials
        // Display error message or redirect to login page
    }
}
?>
