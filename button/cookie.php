<?php
// Print all cookies
echo "<h2>All Cookies:</h2>";
foreach ($_COOKIE as $key => $value) {
    echo "<p><strong>$key</strong>: $value</p>";
}
if(isset($_COOKIE['latitude'])) {
    echo "Success latitude <br>";
} else {
    echo "Latitude cookie not set";
}
if(isset($_COOKIE['longitude'])) {
    echo "Success longitude <br>";
} else {
    echo "Latitude cookie not set";
}
?>
