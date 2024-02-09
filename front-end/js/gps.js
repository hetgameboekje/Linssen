function e() {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(
            function (n) {
                var t = n.coords.latitude,
                    o = n.coords.longitude;
                document.getElementById("latitude").innerText = t,
                    document.getElementById("longitude").innerText = o;
                var a = { latitude: t, longitude: o };
                fetch("./incidenteninfo.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(a)
                })
                .then(function (n) {
                    if (!n.ok) throw new Error("Network response was not ok");
                    return n.json()
                })
                .then(function (n) {
                    console.log("Location data sent successfully:", n)
                })
                .catch(function (n) {
                    console.error("Error sending location data:", n)
                }), window.location.href = "../php/incidenteninfo.php"
            },
            function (n) {
                console.error("Error getting location:", n.message)
            }, {
                enableHighAccuracy: !0
            }
        )
    } else alert("Geolocation is not supported by your browser.")
}