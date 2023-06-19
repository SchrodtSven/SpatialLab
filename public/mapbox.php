<?php declare(strict_types=1);

?>
<doctype html lang="en">
    <html>

    <head>
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    </head>

    <body>
        <div id='map' style='width: 400px; height: 300px;'></div>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1Ijoic3ZlbjE5MDQiLCJhIjoiY2wyaGY1bHg0MGQwZjNkb2psdTk1a2F4NSJ9.RewOYNrd7tNYNdql8EdmJA';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11'
            });
        </script>

        <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    </body>

    </html>