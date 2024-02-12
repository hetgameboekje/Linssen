<?php
require "../../backend/database/DB_connect.php";
if(isset($_COOKIE['latitude'])) {
   $latitude = $_COOKIE['latitude'];
} else {
    echo "Latitude cookie not set";
}
if(isset($_COOKIE['longitude'])) {
    $longitude = $_COOKIE['longitude'];
}



?>