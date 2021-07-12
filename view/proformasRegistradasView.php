{{>headerLogeado}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 
<div class="container-md">
    <h2 class="">Proformas Registradas</h2>
    <table class="table table-hover" id="datatable">
    <a href="/proforma"><button class="btn btn-success my-3">Llenar Proforma</button></a>
        <thead class="thead-dark">
            <tr>
                <th>N° Proforma</th>
                <th>Fecha</th>
                <th>Origen</th>            
                <th>Destino</th>
                <th><img src="/view/images/xmark.png" style="height: 2rem; width:2rem;"/></th>
                <th><img src="/view/images/viewdetails.png" style="height: 2rem; width:2rem;"/></th> 
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            {{#proformas}}
            <tr>
                <td>{{id_proforma}}</td>
                <td>{{fecha_proforma}}</td>
                <td>{{origen_viaje}}</td>
                <td>{{destino_viaje}}</td>   
                <form action="bajaproforma/id={{id_proforma}}" method="GET">
                <td><button class="btn btn-danger">BAJA</button></td> 
                </form>   
                <form action="verproforma/id={{id_proforma}}" method="GET">
                <td><button class="btn btn-primary">VER</button></td>
                </form>    
                <form action="vereditarproforma/id={{id_proforma}}" method="GET">
                <td><button class="btn btn-primary">EDITAR</button></td>
                </form>     
            </tr>
            {{/proformas}}
        </tbody>
    </table>
</div>


<a href="/homeadmin"><button class="btn btn-dark my-3">Volver a Home</button></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
		<script type="text/javascript">
		$(document).ready( function () {
		    $('#datatable').DataTable({
		        language: {
		            search: "Buscar:",
		            zeroRecords: "No se encontró resultados"
		        }
		    } );
		    } );</script>

{{>footer}}