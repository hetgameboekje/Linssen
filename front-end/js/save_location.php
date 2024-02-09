<?php
session_start();

// Check if latitude and longitude are sent in the request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['latitude']) && isset($data['longitude'])) {
        // Store latitude and longitude in session variables
        $_SESSION['latitude'] = $data['latitude'];
        $_SESSION['longitude'] = $data['longitude'];

        // Redirect to incidenteninfo.php
        header("Location: ../../front-end/php/incidenteninfo.php");
        exit; // Make sure to exit after redirection to prevent further execution
    } else {
        // Return error response if latitude or longitude is missing
        echo json_encode(['error' => 'Latitude or longitude missing']);
    }
} else {
    // Return error response for unsupported request method
    echo json_encode(['error' => 'Unsupported request method']);
}
?>
