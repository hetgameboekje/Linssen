<?php
// Get the raw POST data
$postData = file_get_contents("php://input");

// Check if the POST data is not empty
if (!empty($postData)) {
    // Decode the JSON data
    $locationData = json_decode($postData);

    // Check if decoding was successful
    if ($locationData !== null) {
        // Extract latitude and longitude from the received data
        $latitude = $locationData->latitude;
        $longitude = $locationData->longitude;

        // Here you can perform any additional processing or validation with the received location data
        // For example, you can check if the location is within a set area

        // Save the location data to a file, database, or perform any other action you need
        // For demonstration purposes, let's just echo back the received data
        echo "Received location data:\n";
        echo "Latitude: $latitude\n";
        echo "Longitude: $longitude\n";
    } else {
        // Handle JSON decoding error
        echo "Error decoding JSON data.\n";
    }
} else {
    // Handle empty POST data
    echo "No data received.\n";
}
?>
