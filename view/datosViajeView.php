{{>headerLogeado}}

<div class="container-md">
    <div class="row">
        <h2 class="">Datos del Viaje</h2>
    </div>
    <div class="row">
        <div class="col-6" id="mapa" style="width:500px; height:400px;"></div>
        <div class="col-3">latitud <h5 id="latitud"></h5></div>
        <div class="col-3">longitud <h5 id="longitud"></h5></div>   
    </div>        
        <!-- <a href="/homechofer/mostrarubicacion"><button class="btn btn-dark my-3">Obtener ubicacion</button></a> -->
        <button class="btn btn-danger my-3" onclick="loadMap()">Mostrar Ubicacion</button>
    
</div>

<a href="/homechofer"><button class="btn btn-dark my-3">Volver a Home</button></a>

{{>footer}}

<script>
    function loadMap() {
        if(!!navigator.geolocation){
            var mapOptions = {
            //center: new google.maps.LatLng(-34.6686986, -58.5614947),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
            };       

            var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);

            navigator.geolocation.getCurrentPosition(function(position){
                var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
                
                var infoWindow = new google.maps.InfoWindow({
                    map: map,
                    position: geolocate,
                    content:
                    '<h5>Tu ubicacion</h5>' +
                    '<h6>Latitud: '+ position.coords.latitude +'</h6>' +
                    '<h6>Longitud: '+ position.coords.longitude +'</h6>' 
                });

                document.getElementById("latitud").innerHTML = position.coords.latitude;
                document.getElementById("longitud").innerHTML = position.coords.longitude;

                map.setCenter(geolocate);
            });

        }else{
            alert("No soporta geolocalizacion");
        }
        
    }

    //google.maps.event.addDomListener(window, 'load', loadMap);
</script>