<?php
include __DIR__.'/../../classes/User.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the credentials are valid (you should validate and authenticate against a database)
    if ($username === "demo" && $password === "password") {
        echo "Login successful!";
    } else {
        echo "Invalid credentials. Please try again.";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform user registration (you should save the data in a database)
    // For simplicity, just return a success message
    echo "Registration successful for $username!";
}


 

