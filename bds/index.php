 <html lang="en">
  <head>
    <link rel="stylesheet" href="ol.css" type="text/css">
    <script src="ol.js" type="text/javascript"></script>
    <title>Latihan 1</title>
  </head>
  <body>
    <h2>My Map</h2>
    <div id="map" class="map"></div>
    <script type="text/javascript">
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([0,0]),
          zoom: 3
        })
      });
    </script>
  </body>
</html>
