function gps_location () {
    // Check if the browser supports Geolocation
    alert("test");
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
    fetch('./save_location.php', {
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
        // Redirect the user to the desired page upon successful data submission
        window.location.href = '../../front-end/php/incidenteninfo.php';
    })
    .catch(error => {
        console.error('Error sending location data:', error);
    });
}
