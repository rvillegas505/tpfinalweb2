{{>headerLogeado}}

<div class="container-md">
    <h2 class="">Empleados Registrados</h2>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Dni</th> 
                <th>Rol</th>            
            </tr>
        </thead>
        <tbody>
            {{#empleados}}
            <tr>
                <td>{{nombreApellido}}</td>
                <td>{{dni}}</td>
                <td>{{rol}}</td>             
            </tr>
            {{/empleados}}
        </tbody>
    </table>
</div>


<a href="/homeadmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

{{>footer}}