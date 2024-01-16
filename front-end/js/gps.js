function gps_location (latitude , longitude){
// Check if the browser supports Geolocation
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;

                    // Update the HTML elements with the obtained coordinates
                    document.getElementById("latitude").innerText += latitude;
                    document.getElementById("longitude").innerText += longitude;
                    
                }, 
                function(error) {
                    console.error("Error getting location:", error.message);
                },
                { enableHighAccuracy: true } // Request higher accuracy
            );
        } else {
            alert("Geolocation is not supported by your browser.");
        }
        return latitude , longitude;
    }