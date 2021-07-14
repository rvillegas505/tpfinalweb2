<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Proforma </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>

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

    <form action="../printpdf/id={{id_proforma}}" method="GET">
    <button>Imprimir</button>
    </form>

    {{/proforma}}
    </div>
    </div>
</div>

{{>footer}}