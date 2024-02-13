<?php
require "../../backend/Database/DB_connect.php";

// Query to retrieve information from tb_melding_spoed and tb_melding_info tables
$query = "SELECT ms.*, mi.type_ongeval 
          FROM tb_melding_spoed AS ms
          LEFT JOIN tb_melding_info AS mi ON ms.melding_spoed_uuid = mi.melding_info_uuid";

// Prepare the statement
$stmt = mysqli_prepare($conn, $query);

// Execute the statement
mysqli_stmt_execute($stmt);

// Bind result variables
mysqli_stmt_bind_result($stmt, $melding_spoed_uuid, $gebruikersnaam, $tijd_melding, $status, $melding_info_uuid, $type_ongeval);

// Output header
echo "<header><h1>Melding Details</h1></header>";

// Loop through the result set
while (mysqli_stmt_fetch($stmt)) {
    // Determine the value of $type_ongeval_var based on $type_ongeval
    if ($type_ongeval === null) {
        $type_ongeval_var = "ongeval";
    } elseif ($type_ongeval == 1) {
        $type_ongeval_var = "hoogurgent";
    } else {
        $type_ongeval_var = "urgent";
    }

    // Output section with link to admin.php with UUID parameter
    echo "<section>";
    echo "<a href='./admin.php?uuid=$melding_info_uuid'>";
    echo $status == 1 ? "<button class=\"statusactive\">&nbsp;</button>" : "<button class=\"statushandeld\">&nbsp;</button>";
    echo "<button class=\"LoginButtons\">" . $gebruikersnaam . " | " . $tijd_melding . "</button>";
    echo "<button class=\"urgent\">" . ucfirst($type_ongeval_var) . "</button><br>";
    echo "</a></section>";
}

// Close the statement
mysqli_stmt_close($stmt);

// Close the connection to the database
mysqli_close($conn);
?>
