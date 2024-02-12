<?php
require "../../backend/php/session_manager.php";

// Include session manager and database connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set and not empty
    if (isset($_POST["Infobox"]) && isset($_POST["ongeval_type"])) {
        $infobox = $_POST["Infobox"];
        $ongeval_type = $_POST["ongeval_type"];
        $melding_info_uuid = $_SESSION['melding_spoed_uuid'];
        printf($infobox ."<br>" . $ongeval_type ."<br>" . $melding_info_uuid);
        // Prepare and execute the SQL query
    } else {
        echo "<p>One or more form fields are empty.</p>";
    }
} else {
    echo "<p>No data submitted.</p>";
}
?>