function gps_location() {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(
            function(position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;
                console.log("Latitude:", latitude);
                console.log("Longitude:", longitude);
                
                // Set cookies for latitude and longitude with expiration time
                var expires = new Date();
                expires.setTime(expires.getTime() + (3 * 60 * 60 * 1000)); // 3 hours
                document.cookie = `latitude=${latitude}; expires=${expires.toUTCString()}`;
                document.cookie = `longitude=${longitude}; expires=${expires.toUTCString()}`;
                
                // Redirect to PHP script
                window.location.href = "./test.php";
            },
            function(error) {
                console.error("Error getting location:", error.message);
            }
        );
    } else {
        alert("Geolocation is not supported by your browser.");
    }
}

// function e() {
//     if ("geolocation" in navigator) {
//         navigator.geolocation.getCurrentPosition(
//             function (n) {
//                 var t = n.coords.latitude,
//                     o = n.coords.longitude;
//                 document.getElementById("latitude").innerText = t,
//                     document.getElementById("longitude").innerText = o;
//                 var a = { latitude: t, longitude: o };
//                 fetch("./incidenteninfo.php", {
//                     method: "POST",
//                     headers: {
//                         "Content-Type": "application/json"
//                     },
//                     body: JSON.stringify(a)
//                 })
//                 .then(function (n) {
//                     if (!n.ok) throw new Error("Network response was not ok");
//                     return n.json()
//                 })
//                 .then(function (n) {
//                     console.log("Location data sent successfully:", n)
//                 })
//                 .catch(function (n) {
//                     console.error("Error sending location data:", n)
//                 }), window.location.href = "../php/incidenteninfo.php"
//             },
//             function (n) {
//                 console.error("Error getting location:", n.message)
//             }, {
//                 enableHighAccuracy: !0
//             }
//         )
//     } else alert("Geolocation is not supported by your browser.")
// }