<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // You can perform validation and database insertion here
    // For simplicity, we'll just print the values for demonstration purposes
    echo "Name: " . $name . "<br>";
    echo "Mobile No: " . $mobile . "<br>";
    echo "Email: " . $email . "<br>";
    
    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    echo "Hashed Password: " . $hashed_password;
}
?>
