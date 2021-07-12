{{>headerLogeado}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<div class="container-md">
    <h2 class="">Empleados Registrados</h2>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Dni</th> 
                <th>Rol</th>
                <th>Disponible</th>            
            </tr>
        </thead>
        <tbody>
            {{#empleados}}
            <tr>
                <td>{{nombreApellido}}</td>
                <td>{{dni}}</td>
                <td>{{rol}}</td>
                <td>{{disponible}}</td>
                <form action="bajaempleado/dni={{dni}}" method="GET">
                <td><button class="btn btn-danger">BAJA</button></td>
                </form>
                <form action="rolempleado/dni={{dni}}" method="GET">
                    <td><input type="text" name="rol" placeholder="Rol"></button>
                    <button class="btn btn-warning">CAMBIAR ROL</button></td>
                </form>
                <form action="cambiarDisponibilidadEmpleado/dni={{dni}}" method="GET">
                    <td><div class="form-check">
                    <input class="form-check-input" type="radio" name="disponible" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        DISPONIBLE
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="noDisponible" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                        NO DISPONIBLE
                    </label>
                    </div></td>
                    <td>
                        <button type="submit">Actulizar</button>
                    </td>
                </form>
            </tr>
            {{/empleados}}
        </tbody>
    </table>
</div>


<a href="/homeadmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

{{>footer}}