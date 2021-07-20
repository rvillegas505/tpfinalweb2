{{>headerLogeado}}

<a href="/homeChofer"><button class="btn btn-dark my-3">Volver a Home</button></a>
{{#viaje}}
<div class="container-md my-3 col-md-6">
<h3 class="my-3">Carga de posicion actual</h3>
</div>
<div class="container-md my-3 col-md-6">
    <form action="/homeChofer/procesarPosicionActual/id={{id_viaje}}" method="POST">
    <div class="form-group">
        <label for="kilometrosRecorridos">Kilometros recorridos</label>
        <input type="number" class="form-control" name="kilometrosRecorridos" id="kilometrosRecorridos" required>
    </div>
    <hr class="bg-dark d-block py-1">
    <div class="form-group">
        <label for="combustibleGastado">Combustible gastado</label>
        <input type="number" class="form-control" name="combustibleGastado" id="combustibleGastado" required>
    </div>
    <div class="form-group">
        <label for="peajes">Peajes</label>
        <input type="number" class="form-control" name="peajes" id="peajes" required>
    </div>
    <div class="form-group">
        <label for="extras">Extras</label>
        <input type="number" class="form-control" name="extras" id="extras" required>
    </div>
    <div class="form-group">
        <label for="extras">Latitud</label>
        <input type="text" class="form-control" name="latitudinput" id="latitudinput" required>
    </div>
    <div class="form-group">
        <label for="extras">Longitud</label>
        <input type="text" class="form-control" name="longitudinput" id="longitudinput" required>
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="ubifinal" name="ubifinal" value="1">
        <label class="form-check-label" for="ubifinal">Ubicacion Final?</label>
    </div>
    
    <button type="submit" name="submit" class="btn btn-dark">Registrar Proforma</button>
    
       
    </form>
    <div class="container-md">
    <div class="row">
        <h2 class="">Datos del Viaje</h2>
    </div>
    <div class="row">
        <div class="col-12" id="mapa" style="width:500px; height:400px;"></div>
        <div class="col-6">latitud <h5 id="latitud"></h5></div>
        <div class="col-6">longitud <h5 id="longitud"></h5></div>   
    </div>
    <button class="btn btn-danger my-3" onclick="loadMap()">Mostrar Ubicacion</button>
    {{/viaje}}    
</div>

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

                document.getElementById("latitudinput").value = position.coords.latitude;
                document.getElementById("longitudinput").value = position.coords.longitude;

                map.setCenter(geolocate);
            });

        }else{
            alert("No soporta geolocalizacion");
        }
        
    }

</script>
</div>