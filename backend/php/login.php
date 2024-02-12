<?php
// Include the database connection
include "../Database/DB_connect.php";

// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL injection prevention
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to fetch admin credentials
    $query = "SELECT * FROM tb_gebruiker WHERE gebruikersnaam='$username' AND wachtwoord='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Check if the username and password match
    if (mysqli_num_rows($result) == 1) {
         // Initializing Session
        $_SESSION["login"]= $username ;
        $_SESSION["permission"] = 1;
        header("location: ../../front-end/php/home.php"); // Redirecting To Admin Panel
    } else {
        $error = "Username or Password is invalid";
    }
}


?>
