<?php
require "../../backend/Database/DB_connect.php";
require "../../backend/php/session_manager.php";

$melding_spoed_uuid = uniqid(uniqid());
$_SESSION['melding_spoed_uuid'] = $melding_spoed_uuid;
$tijd_melding = date('Y-m-d H:i:s');
$gebruikersnaam = $_SESSION['login'];
if(isset($_GET['latitude'])) {
   $latitude = $_GET['latitude'];
} else {
    echo "Latitude cookie not set <br>";
}
if(isset($_GET['longitude'])) {
    $longitude = $_GET['longitude'];
}
else {
    echo"longitude cookie not set <br>";
}

printf("<br>" . $melding_spoed_uuid . "<br>" .  $tijd_melding . "<br>" .  $gebruikersnaam . "<br>" .  $latitude . "<br>" .  $longitude );

//$sql = "INSERT INTO `tb_melding_spoed`(`melding_spoed_uuid`, `tijd_melding`, `gebruikersnaam`, `longitude`, `latitude`) VALUES ('$melding_spoed_uuid','$tijd_melding','$gebruikersnaam','$longitude','$latitude')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    //header("Location: ../../front-end/php/incidenteninfo.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// verbinding database
// verzamel het volgende in een variable:
//
// uuid
// tijd stamp
// gebruikersnaam
// longitude
//latitude
//
// Insert variables in SQL querry
// 

?>