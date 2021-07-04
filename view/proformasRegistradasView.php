{{>headerLogeado}}

<div class="container-md">
    <h2 class="">Proformas Registradas</h2>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>N° Proforma</th>
                <th>Fecha</th>
                <th>Origen</th>            
                <th>Destino</th>
            </tr>
        </thead>
        <tbody>
            {{#proformas}}
            <tr>
                <td>{{id_proforma}}</td>
                <td>{{fecha_proforma}}</td>
                <td>{{origen_viaje}}</td>
                <td>{{destino_viaje}}</td>            
            </tr>
            {{/proformas}}
        </tbody>
    </table>
</div>


<a href="/homeadmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

{{>footer}}