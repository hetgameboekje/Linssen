<?php
require "../../backend/Database/DB_connect.php";

// Query to join tables and retrieve information
$query = "SELECT tb_melding_spoed.*, tb_melding_info.type_ongeval, tb_user.username FROM tb_melding_spoed LEFT JOIN tb_melding_info ON tb_melding_spoed.melding_spoed_uuid = tb_melding_info.melding_info_uuid LEFT JOIN tb_user ON tb_melding_spoed.user_id = tb_user.user_id";

// Executing the query
$result = mysqli_query($conn, $query);

// Checking for SQL errors
if (!$result) {
    // Handle SQL error
    echo "Error: " . mysqli_error($conn);
} else {
    // If no SQL error, loop through the joined tables
    while ($row = mysqli_fetch_assoc($result)) {
        // Extracting data
        $username = $row['gebruikersnaam'];
        $type_ongeval = $row['type_ongeval'];
        $tijd_melding = $row['tijd_melding'];
        $status = $row['status'];

        // Output based on conditions
        echo $status == 1 ? "<button class=\"statusactive\">&nbsp;</button>" : "<button class=\"statushandeld\">&nbsp;</button>";
        echo "<button class=\"statusactive\">" . $username . " | " . $tijd_melding . "</button>";
        if ($type_ongeval == 0) {
            echo "<button class=\"urgent\">Hoog urgent</button>";
        } elseif ($type_ongeval == 1) {
            echo "<button class=\"hoogurgent\">Hoog urgent</button>";
        } else {
            echo "<button class=\"hoogurgent\"> Geen info</button>";
        }
        echo "<br>";
    }
}

// Close the connection
mysqli_close($conn);

?>
