<?php
require "../../backend/php/session_manager.php";
require "../../backend/Database/DB_connect.php";

// Include session manager and database connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set and not empty
    if (isset($_POST["Infobox"]) && isset($_POST["ongeval_type"])) {
        $infobox = $_POST["Infobox"];
        $ongeval_type = $_POST["ongeval_type"];
        $melding_info_uuid = $_SESSION['melding_spoed_uuid'];
        printf($infobox ."<br>" . $ongeval_type ."<br>" . $melding_info_uuid);
        // Prepare and execute the SQL query
        $sql = "INSERT INTO `tb_melding_info`(`melding_info_uuid`, `type_ongeval`, `bericht`) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $melding_info_uuid, $ongeval_type, $infobox);
        if ($stmt->execute()) {
            echo "New record created successfully";
            header("Location: ../../front-end/php/overzicht.php");
            exit(); // Ensure no further output is sent
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $stmt->close();
    } else {
        echo "<p>One or more form fields are empty.</p>";
    }
} else {
    echo "<p>No data submitted.</p>";
}
?>
