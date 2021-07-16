{{>headerLogeado}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<div class="container-md">
    <h2>Tractores Registrados</h2>
    <table class="table table-hover">
        <a href="/arrastrado"><button class="btn btn-success my-3">Agregar Arrastrado</button></a>
        <thead class="thead-dark">
        <tr>
            <th>Tipo</th>
            <th>Patente</th>
            <th>Chasis</th>
            <th><h5 class="text-dark">.</h5></th>
        </tr>
        </thead>
        <tbody>
        {{#arrastrado}}
        <tr>
            <td>{{arrastrado_tipo}}</td>
            <td>{{arrastrado_patente}}</td>
            <td>{{arrastrado_chasis}}</td>
            <form action="bajaarrastrado/patente={{arrastrado_patente}}" method="GET">
                <td><button class="btn btn-danger">ELIMINAR</button></td>
            </form>
            <form action="vereditararrastrado/patente={{arrastrado_patente}}" method="GET">
                <td><button class="btn btn-primary">EDITAR</button></td>
            </form>
        </tr>
        {{/arrastrado}}
        </tbody>
    </table>
</div>


<a href="/homeadmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

{{>footer}}
