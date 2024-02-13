<?php
require "../../backend/Database/DB_connect.php";

// Query to retrieve information from tb_melding_spoed table only
$query = "SELECT * FROM tb_melding_spoed";

// Executing the query
$result = mysqli_query($conn, $query);

// Checking for SQL errors
if (!$result) {
    // Handle SQL error
    echo "Error: " . mysqli_error($conn);
} else {
    // If no SQL error, loop through the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Extracting data
        $username = $row['gebruikersnaam']; // Assuming the column name is gebruikersnaam
        $tijd_melding = $row['tijd_melding'];
        $status = $row['status'];
        
        // Making connection to tb_melding_info
        $conn_info = $conn;
        // Query to retrieve information from tb_melding_info
        $query_info = "SELECT * FROM tb_melding_info WHERE melding_info_uuid = '{$row['melding_spoed_uuid']}'";
        $result_info = mysqli_query($conn_info, $query_info);

        // Checking for SQL errors
        if (!$result_info) {
            // If there's an SQL error, set $type_ongeval to 0
            $type_ongeval = 0;
        } else {
            // If no SQL error, fetch the data
            $row_info = mysqli_fetch_assoc($result_info);
            $type_ongeval = isset($row_info['type_ongeval']) ? $row_info['type_ongeval'] : 0;
        }

        // Close the connection to tb_melding_info
        mysqli_close($conn_info);

        // Determine the value of $type_ongeval_var based on $type_ongeval
        if ($type_ongeval == 0) {
            $type_ongeval_var = "ongeval";
        } elseif ($type_ongeval == 1) {
            $type_ongeval_var = "hoogurgent";
        } else {
            $type_ongeval_var = "urgent";
        }

        // Output based on conditions
        echo $status == 1 ? "<button class=\"statusactive\">&nbsp;</button>" : "<button class=\"statushandeld\">&nbsp;</button>";
        echo "<button class=\"statusactive\">" . $username . " | " . $tijd_melding . "</button>";
        echo "<button class=\"urgent\">" . ucfirst($type_ongeval_var) . "</button><br>";
    }
}

// Close the connection to tb_melding_spoed
mysqli_close($conn);

?>
