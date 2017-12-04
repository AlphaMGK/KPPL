<html>
    <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">

        var directionDisplay;
        var map;


        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            var office = new google.maps.LatLng(-7.278346, 112.792559);
            var myOptions = {
                zoom:12,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: office
            }

            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            directionsDisplay.setMap(map);
        }


        var directionsService = new google.maps.DirectionsService();

        function calcRoute() {
            var start = new google.maps.LatLng(-7.278346, 112.792559);
            var location = document.getElementById("location").value;
            var distanceInput = document.getElementById("distance");

            var request = {
                origin:start,
                destination:location,
                travelMode: google.maps.DirectionsTravelMode.DRIVING
            };

            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    distanceInput.value = response.routes[0].legs[0].distance.value / 1000;
                }
            });
        }
        function hitungHarga(){
            calcRoute();
			var distance = document.getElementById("distance").value;
            var height = document.getElementById("tinggi").value;
            var harga_device = 150000;
			var hitung = (distance*10000)+(height*25000)+harga_device;
			var hargatotal = document.getElementById("harga");
			hargatotal.value = "Rp"+hitung;
        }
    </script>

    <title>Distance Calculator</title>

    <style type="text/css">

            body {
                font-family:Helvetica, Arial;
            }
            #map_canvas {
                height: 50%;
                width: 25%;
            }
            #harga{
                border: none;
            }
    </style>
    </head>
    <body>

    <body onload="initialize()">
    <p>Cek harga order</p>
        <div>
            <p>
<!--                 <label for="start">Start: </label>
                <input type="text" name="start" id="start" />
 -->
                <label for="location">Location: </label>
                <input type="text" name="location" id="location" />
                <!-- <input type="submit" value="Calculate Route" onclick="calcRoute()" /> -->
            </p>
            <p>
                <label for="tinggi">Tinggi gedung (meter): </label>
                <input type="text" name="tinggi" id="tinggi" />
                <br />				
            </p>
            <p>
                <label for="distance">Distance (km): </label>
                <input type="text" name="distance" id="distance" readonly="true" />
            </p>
            <p>
                <input type="submit" value="Calculate Price" onclick="hitungHarga()" />
            </p>
			<p>
                <label for="harga">Harga ongkir: </label>
                <input type="text" name="harga" id="harga" readonly="true" />
            </p>
        </div>
        <div id="map_canvas"></div>
    </body>
</html>