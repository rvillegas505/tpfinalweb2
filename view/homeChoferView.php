{{>headerLogeado}}

<div style="height: 80vh; width:auto;">
    <div class="row p-5">
        {{#viaje}}
        <div class="container-md my-5 border col-sm-4">
            <h2 class="my-3">Datos del viaje</h2>           
            <a href="/homeChofer/mostrarRegistroPosicion/id={{id_viaje}}"><button class="btn btn-dark my-3">Registrar datos del viaje</button></a>
        </div>  
        {{/viaje}}      
    </div>
</div>

{{>footer}}