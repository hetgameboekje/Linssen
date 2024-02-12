<?php
// Check if the latitude and longitude cookies are set
if(isset($_COOKIE['latitude']) && isset($_COOKIE['longitude'])) {
    // Retrieve the latitude and longitude values from the cookies
    $latitude = $_COOKIE['latitude'];
    $longitude = $_COOKIE['longitude'];
    
    // Do something with the latitude and longitude values
    echo "Latitude retrieved from cookie: " . $latitude;
    echo "Longitude retrieved from cookie: " . $longitude;
} else {
    echo "Latitude and/or longitude cookies not set.";
}
?>
