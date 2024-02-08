<?php
session_start();

// Include the database configuration or connect to your database
include "../../backend/Database/DB_connect.php";

// Function to handle user login
function handle_login($conn) {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get user input (sanitize to prevent SQL injection)
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Prepare and execute a statement to retrieve the hashed password from the database
        $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($dbUsername, $dbPassword);
        $stmt->fetch();
        $stmt->close();

        // Verify the password
        if ($dbUsername && password_verify($password, $dbPassword)) {
            // Password is correct, start a session
            $_SESSION['username'] = $username;

            // Redirect to a dashboard or home page
            header("Location: ../../front-end/PanicButton/index.php");
            exit();
        } else {
            // Invalid username or password, redirect back to login page with error message
            header("Location: login.php?error=1");
            exit();
        }
    }
}

// Call the function to handle login
handle_login($conn);

// Close the database connection
$conn->close();
?>
