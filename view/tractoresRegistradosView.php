{{>headerLogeado}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<div class="container-md">
    <h2>Tractores Registrados</h2>
    <table class="table table-hover">
        <a href="/tractor"><button class="btn btn-success my-3">Agregar Tractor</button></a>
        <thead class="thead-dark">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Patente</th>
            <th>Motor</th>
            <th>Chasis</th>
            <th>Kilometros</th>
            <th><h5 class="text-dark">.</h5></th>
        </tr>
        </thead>
        <tbody>
        {{#tractor}}
        <tr>
            <td>{{tractor_marca}}</td>
            <td>{{tractor_modelo}}</td>
            <td>{{tractor_patente}}</td>
            <td>{{tractor_motor}}</td>
            <td>{{tractor_chasis}}</td>
            <td>{{km_camion}}</td>
            <form action="bajatractor/patente={{tractor_patente}}" method="GET">
                <td><button class="btn btn-danger">ELIMINAR</button></td>
            </form>
            <form action="vereditartractor/patente={{tractor_patente}}" method="GET">
                <td><button class="btn btn-primary">EDITAR</button></td>
            </form>
        </tr>
        {{/tractor}}
        </tbody>
    </table>
</div>


<a href="/homeadmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

{{>footer}}