document.addEventListener('DOMContentLoaded', () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                let userLocation = {
                    lat: position.coords.latitude,
                    lon: position.coords.longitude,
                };

                let map = L.map("map").setView(
                    [userLocation.lat, userLocation.lon],
                    15
                );

                L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                    attribution: "© OpenStreetMap contributors",
                }).addTo(map);

                L.marker([userLocation.lat, userLocation.lon]).addTo(map);

                const lieuPrecis = {
                    lat: 48.018993,
                    lon: -2.184843
                };

                let distance = calculerDistance(
                    userLocation.lat,
                    userLocation.lon,
                    lieuPrecis.lat,
                    lieuPrecis.lon
                );

                console.log("Distance par rapport au lieu précis : " + distance + " km");
                alert("Distance par rapport au lieu précis : " + distance + " km");

                L.Routing.control({
                    waypoints: [
                        L.latLng(userLocation.lat, userLocation.lon),
                        L.latLng(lieuPrecis.lat, lieuPrecis.lon),
                    ],
                }).addTo(map);

                setTimeout(function () {
                    map.invalidateSize();
                }, 100);
            },
            function (error) {
                console.error("Erreur de géolocalisation : " + error.message);
                alert("Erreur de géolocalisation : " + error.message);
            }
        );
    } else {
        console.error("La géolocalisation n'est pas prise en charge par ce navigateur");
        alert("La géolocalisation n'est pas prise en charge par ce navigateur");
    }

    function calculerDistance(lat1, lon1, lat2, lon2) {
        let R = 6371; // Rayon moyen de la Terre en kilomètres
        let dLat = degToRad(lat2 - lat1);
        let dLon = degToRad(lon2 - lon1);
        let a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(degToRad(lat1)) * Math.cos(degToRad(lat2)) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);
        let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return R * c; // Distance en kilomètres
    }

    function degToRad(deg) {
        return deg * (Math.PI / 180);
    }
});
