<!DOCTYPE html>
<html>
<head>
    <title>Incidenten Post</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set and not empty
    if (isset($_POST["Infobox"]) && isset($_POST["ongeval_type"])) {
        $infobox = $_POST["Infobox"];
        $ongeval_type = $_POST["ongeval_type"];
        

    } else {
        echo "<p>One or more form fields are empty.</p>";
    }
} else {
    echo "<p>No data submitted.</p>";
}
?>

</body>
</html>
