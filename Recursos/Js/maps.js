// Initialize and add the map

var coorX = 17.972212364834565;
var coorY = -92.94093984050025;

var map = L.map('map').setView([coorX, coorY], 13);


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

function myLocation(x, y, s, d) {
    var marker = L.marker([x, y]).addTo(map);
    marker.bindPopup("<b style='text-align:center;'>" + s + "</b><hr>" + d + "<hr>" + x + ", " + y + ".").openPopup();
}