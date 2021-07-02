{{>headerLogeado}}

<h3>ESTAS LOGEADO</h3>

<a href="/proforma"><button class="btn btn-dark my-3">Llenar Proforma</button></a>

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