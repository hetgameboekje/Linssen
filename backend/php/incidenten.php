<?php
require "../../backend/Database/DB_connect.php";


$query = "SELECT tb_melding_spoed.melding_spoed_uuid, tb_melding_spoed.tijd_melding, tb_melding_spoed.gebruikersnaam, tb_melding_info.melding_info_uuid, tb_melding_info.type_ongeval, tb_melding_info.status 
FROM tb_melding_spoed
LEFT JOIN tb_melding_info ON tb_melding_spoed.melding_spoed_uuid = tb_melding_info.melding_info_uuid";
// Prepare the statement
$stmt = mysqli_prepare($conn, $query);

// Execute the statement
mysqli_stmt_execute($stmt);

// Bind result variables
mysqli_stmt_bind_result($stmt, $melding_spoed_uuid, $tijd_melding, $gebruikersnaam, $melding_info_uuid, $type_ongeval, $status);

// Output header

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
