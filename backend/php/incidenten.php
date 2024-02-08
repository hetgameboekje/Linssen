<?php
include_once "../../backend/Database/DB_connect.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];
}


?>