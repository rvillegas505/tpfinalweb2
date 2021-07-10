{{>headerLogeado}}

<div class="container">
<a href="/homeadmin/verproformas"><button class="btn btn-dark my-3">Volver a la lista</button></a>
</div>



<div class="container">
{{#proforma}}

<h3>Proforma ID: {{id_proforma}}</h3>
<p>CLIENTE: {{nombre_cliente}} CUIT: {{cuit_cliente}}</p>
<p>Origen: {{origen_viaje}} </p>
<p>Destino: {{destino_viaje}}</p>


{{/proforma}}

</div>

{{>footer}}