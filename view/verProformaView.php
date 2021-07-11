{{>headerLogeado}}

<div class="container">
<a href="/homeadmin/verproformas"><button class="btn btn-dark my-3">Volver a la lista</button></a>
</div>



<div class="container">
    <div class="d-flex justify-content-center ">
    <div class="col-sm-6">
    {{#proforma}}

    <h5>Fecha Proforma: {{fecha_proforma}}</h5>
    <hr class="bg-dark d-block py-1">
    <h4>Datos del cliente</h4>
    <p>NOMBRE: {{nombre_cliente}} CUIT: {{cuit_cliente}}</p>
    <p>TELEFONO: {{telefono_cliente}}  EMAIL: {{email_cliente}}</p>
    <hr class="bg-dark d-block py-1">
    <h4>Viaje</h4>
    <p>ORIGEN: {{origen_viaje}} DESTINO: {{destino_viaje}}</p>
    <p>FECHA DE CARGA: {{fecha_carga_viaje}}</p>
    <p>ETD: {{etd_estimado}}  ETA:{{eta_estimado}}</p>
    <hr class="bg-dark d-block py-1">
    <h4>Carga</h4>
    <p>TIPO DE CARGA: {{tipo_carga}}</p>
    <p>PESO NETO: {{peso_neto_carga}}</p>
    <hr class="bg-dark d-block py-1">
    <h4>Costo</h4>
    <p>KILOMETROS: {{km_estimado}} </p>
    <p>COMBUSTIBLE: ${{combustible_estimado}} </p>
    <p>VIATICOS: ${{viaticos_estimado}} </p>
    <p>PEAJES Y PASAJES: ${{peajes_estimado}} </p>
    <p>EXTRAS: ${{extras_estimado}}</p>
    <p>HAZARD: ${{hazard_estimado}} </p>
    <p>REEFER: ${{reefer_estimado}} </p>
    <p>FEE: ${{fee_estimado}} </p>

    <h4 class="my-3"> Total: ${{total_estimado}} </h4>

    {{/proforma}}
    </div>
    </div>
</div>

{{>footer}}