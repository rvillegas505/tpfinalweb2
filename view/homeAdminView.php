{{>headerLogeado}}

<h3>ESTAS LOGEADO</h3>

<a href="/proforma"><button class="btn btn-dark my-3">Llenar Proforma</button></a>

<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Proformas Registradas</h2>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>N° Proforma</th>
                <th>Fecha</th>            
            </tr>
        </thead>
        <tbody>
            {{#proformas}}
            <tr>
                <td>{{id_proforma}}</td>
                <td>{{fecha_proforma}}</td>            
            </tr>
            {{/proformas}}
        </tbody>
    </table>
</div>
{{>footer}}