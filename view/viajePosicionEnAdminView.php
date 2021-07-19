{{>headerLogeado}}

<div class="container">
<a href="/homeadmin/verproformas"><button class="btn btn-dark my-3">Volver</button></a>
</div>

<div class="container">
    <h2>Viaje</h2>
    <table class="table table-hover">
        <thead class="thead-dark">
        <tr>
            <th>DNI Chofer</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Estado</th>
            <th>km_totales</th>
        </tr>
        </thead>
        <tbody>
        {{#viaje}}
        <tr>
            <td>{{dni_chofer}}</td>
            <td>{{origen}}</td>
            <td>{{destino}}</td>
            <td>{{estado}}</td>
            <td>{{km_totales}}</td>
        </tr>
        {{/viaje}}
        </tbody>
    </table>
</div>

<div class="container">
    <h2>Posiciones del Chofer</h2>
    <table class="table table-hover">
        <thead class="thead-dark">
        <tr>
            <th>Longitud</th>
            <th>Latitud</th>
            <th>Km recorridos</th>
            <th>Combustible Gastado</th>
            <th>Peajes</th>
            <th>Extras</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        {{#posiciones}}
        <tr>
            <td>{{longitud}}</td>
            <td>{{latitud}}</td>
            <td>{{km_recorridos}}</td>
            <td>${{combustible_gastado}}</td>
            <td>${{peajes}}</td>
            <td>${{extras}}</td>
            <td>${{total}}</td>
        </tr>
        {{/posiciones}}
        </tbody>
    </table>
</div>







{{>footer}}