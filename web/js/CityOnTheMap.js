function cityOnTheMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(1, 1),
        zoom: 12
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
}
