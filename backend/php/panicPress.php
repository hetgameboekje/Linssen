<?php
// Include session manager and database connection
require "../../backend/php/session_manager.php";
require "../../backend/Database/DB_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set and not empty
    if (isset($_POST["Infobox"]) && isset($_POST["ongeval_type"])) {
        $infobox = $_POST["Infobox"];
        $ongeval_type = $_POST["ongeval_type"];
        $melding_info_uuid = $_SESSION['melding_info_uuid'];
        // Prepare and execute the SQL query
    } else {
        echo "<p>One or more form fields are empty.</p>";
    }
} else {
    echo "<p>No data submitted.</p>";
}
$sql = "INSERT INTO `tb_melding_info`(`melding_info_uuid`, `type_ongeval`, `bericht`) VALUES ('$melding_info_uuid','$ongeval_type','$infobox')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../../front-end/php/incidenteninfo.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



