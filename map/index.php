<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="index.js"></script>
    <script
    defer
    src="https://maps.googleapis.com/maps/api/js?key=<API 키>&callback=initMap"
  ></script>
    <style>
/*
 * Always set the map height explicitly to define the size of the div element
 * that contains the map.
 */
#map {
    height: 400px; /* The height is 400 pixels */
    width: 100%; /* The width is the width of the web page */
}

/*
 * Optional: Makes the sample page fill the window.
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
    </style>

</head>
<body>
<h3>My Google Maps Demo</h3>

<div id="map" style="height: 600px;"></div>

</body>
</html>