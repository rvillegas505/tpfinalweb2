{{>headerLogeado}}

<h3>ESTAS LOGEADO</h3>

<div class="row p-5">
    <div class="container-md my-5 border col-sm-4">
        <h2 class="my-3">Proformas</h2>
        <a href="/proforma"><button class="btn btn-dark my-3">Llenar Proforma</button></a>
        <a href="/homeadmin/verproformas"><button class="btn btn-dark my-3">Proformas Registradas</button></a>
    </div>

    <div class="container-md my-5 border col-sm-4">
        <h2 class="my-3">Empleados</h2>
        <a href="/homeadmin/verempleados"><button class="btn btn-dark my-3">Ver Empleados</button></a>
    </div>
</div>

<h1>PROFORMAS CARGADAS</h1>
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
<table class="w3-table">
        <tr>
            <th>Presentacion</th>
            <th>fecha</th>
        </tr>
        {{#proforma}}
        <tr>
            <td>{{id_proforma}}</td>
            <td>{{fecha_proforma}}</td>
        </tr>
        {{/proforma}}
    </table>
</div>
{{>footer}}