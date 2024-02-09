<?php require "../../backend/php/session_manager.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

<div id="Layout">
    <header>
        <a href="../php/home.php"><img src="../Images/LinssenBlue.jpeg" id="LinssenLogo"></a>
    </header>

    <footer>
        <a href="/front-end/php/login.php"><button id="UserBtn"> <?php echo $_SESSION["login"];?> </button></a>
    </footer>
</div>

<div id="MeldenDiv">
    <button id="MeldenBtn" onclick="gps_location()">
            <img src="../Images/MeldenBtnAccent.png" id="MeldenBtnAccent">
             MELDEN </button>
</div>

<!-- Display latitude and longitude -->


<script>
    function gps_location() {
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;

                    // Update the HTML elements with the obtained coordinates
                    document.getElementById("latitude").innerText = latitude;
                    document.getElementById("longitude").innerText = longitude;

                    // Create a JSON object with the coordinates
                    var locationData = {
                        latitude: latitude,
                        longitude: longitude
                    };

                    // Send the location data to your backend
                    sendLocationData(locationData);

                    // Redirect the user to the desired page
                    window.location.href = "../php/incidenteninfo.php";
                }, 
                function(error) {
                    console.error("Error getting location:", error.message);
                },
                { enableHighAccuracy: true } // Request higher accuracy
            );
        } else {
            alert("Geolocation is not supported by your browser.");
        }
    }

    function sendLocationData(locationData) {
        // Send the location data to your backend using fetch or another method
        fetch('./test.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(locationData),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Location data sent successfully:', data);
        })
        .catch(error => {
            console.error('Error sending location data:', error);
        });
    }
</script>

</body>
</html>
