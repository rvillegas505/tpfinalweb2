{{>headerLogeado}}

<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="../functions.js"></script>
</head>

<a href="/homeAdmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

<div class="container-md my-3 col-md-6">
<h3 class="my-3">Carga de Proforma</h3>
</div>

<div class="container-md my-3 col-md-6">
<form action="/proforma/procesarProforma" class="row g-3 needs-validation" method="POST" novalidate>

    <div class="col-md-12">
        <label for="validation">Fecha</label>
        <input type="date" class="form-control" name="fechaProforma" id="validation" required>
        <div class="invalid-feedback">
            Seleccione fecha de creación de proforma.
        </div>
    </div>

    <!--SECCION CLIENTE-->
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Cliente</h4>

    <div class="form-group">
        <label for="nombreCliente">Nombre y apellido</label>
        <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" required>
        <div class="invalid-feedback">
            Ingrese nombre y apellido del cliente.
        </div>
    </div>
    <div class="form-group">
        <label for="cuitCliente">CUIT</label>
        <input type="number" class="form-control" name="cuitCliente" id="cuitCliente" required>
        <div class="invalid-feedback">
            Ingrese CUIT del cliente.
        </div>
    </div>
    <div class="form-group">
        <label for="direccionCliente">Direccion</label>
        <input type="text" class="form-control" name="direccionCliente" id="direccionCliente" required>
        <div class="invalid-feedback">
            Ingrese dirección del cliente.
        </div>
    </div>
    <div class="form-group">
        <label for="telefonoCliente">Telefono</label>
        <input type="number" class="form-control" name="telefonoCliente" id="telefonoCliente" required>
        <div class="invalid-feedback">
            Número de teléfono no válido.
        </div>
    </div>
    <div class="form-group">
        <label for="emailCliente">Email</label>
        <input type="email" class="form-control" name="emailCliente" id="emailCliente" required>
        <div class="invalid-feedback">
            Email no válido.
        </div>
    </div>

    <!--SECCION VIAJE-->
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Viaje</h4>

    <div class="form-group">
        <label for="origenViaje">Origen</label>
        <input type="text" class="form-control" name="origenViaje" id="origenViaje" required>
        <div class="invalid-feedback">
            Ingrese lugar de origen del viaje.
        </div>
    </div>

    <div class="form-group">
        <label for="destinoViaje">Destino</label>
        <input type="text" class="form-control" name="destinoViaje" id="destinoViaje" required>
        <div class="invalid-feedback">
            Ingrese lugar de destino del viaje.
        </div>
    </div>

    <div class="form-group">
        <label for="fechaCarga">Fecha de Carga</label>
        <input type="date" class="form-control" name="fechaCarga" id="fechaCarga" required>
        <div class="invalid-feedback">
            Seleccione fecha de carga del viaje.
        </div>
    </div>

    <div class="form-group">
        <label for="patenteCamion">Patente del camión</label>

        <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th></th>           
            </tr>
        </thead>
        <tbody>
            {{#tractor}}
            <tr>
                <td>{{tractor_patente}}</td>
                <td>{{tractor_marca}}</td>
                <td>{{tractor_modelo}}</td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="patenteCamion" value ="{{tractor_patente}}" id="patenteCamion" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        ASIGNAR
                    </label>
                    <div class="invalid-feedback">
                        Asigne un camion.
                    </div>
                </div>
                </td>
            </tr>
            {{/tractor}}
        </tbody>
    </table>
        <div class="invalid-feedback">
            Ingrese DNI del chofer.
        </div>
    </div>

    <!--SECCION CARGA-->
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Carga</h4>

    <div class="form-group">
        <label for="tipoCarga">Tipo De Carga</label>
        <select class="form-control" name="tipoCarga" id="tipoCarga">
            <option name="granel" value="granel">Granel</option>
            <option name="liquida" value="liquida">Líquida</option>
            <option name="20" value="20">20"</option>
            <option name="40" value="40">40"</option>
            <option name="jaula" value="jaula">Jaula</option>
            <option name="carcarrier" value="carcarrier">CarCarrier</option>
        </select>
    </div>

    <div class="form-group">
        <label for="pesoNeto">Peso Neto</label>
        <input type="number" class="form-control" name="pesoNeto" id="pesoNeto" required>
        <div class="invalid-feedback">
            Ingrese peso neto de la carga.
        </div>
    </div>

    <!--SECCION Costeo-->
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Costeo (ESTIMADO)</h4>

    <div class="col-md-6">
         <label for="kilometrosEstimado">Kilometros</label>
         <input type="number" class="form-control" name="kilometrosEstimado" id="kilometrosEstimado" required>
        <div class="invalid-feedback">
            Ingrese KM estimados para el viaje.
        </div>
    </div>
    <div class="col-md-6">
        <label for="combustibleEstimado">Combustible</label>
        <input type="number" class="form-control" name="combustibleEstimado" id="combustibleEstimado" required>
        <div class="invalid-feedback">
            Ingrese combustible estimado para el viaje.
        </div>
    </div>

    <div class="col-md-6">
        <label for="etdCosteoEstimado">ETD</label>
        <input type="time" class="form-control" name="etdCosteoEstimado" id="etdCosteoEstimado" required>
        <div class="invalid-feedback">
            Ingrese ETD.
        </div>
    </div>
    <div class="col-md-6">
        <label for="etaCosteoEstimado">ETA</label>
        <input type="time" class="form-control" name="etaCosteoEstimado" id="etaCosteoEstimado" required>
        <div class="invalid-feedback">
            Ingrese ETA.
        </div>
    </div>

    <div class="col-md-6">
        <label for="viaticosEstimado">Viaticos</label>
        <input type="number" class="form-control" name="viaticosEstimado" id="viaticosEstimado" required>
        <div class="invalid-feedback">
            Complete el campo.
        </div>
    </div>
    <div class="col-md-6">
        <label for="peajesPesajesEstimado">Peajes y Pesajes</label>
        <input type="number" class="form-control" name="peajesPesajesEstimado" id="peajesPesajesEstimado" required>
        <div class="invalid-feedback">
            Complete el campo.
        </div>
    </div>

    <div class="col-md-6">
        <label for="extrasEstimado">Extras</label>
        <input type="number" class="form-control" name="extrasEstimado" id="extrasEstimado" required>
        <div class="invalid-feedback">
            Complete el campo.
        </div>
    </div>
    <div class="col-md-6">
        <label for="hazardEstimado">Hazard</label>
        <input type="number" class="form-control" name="hazardEstimado" id="hazardEstimado" required>
        <div class="invalid-feedback">
            Complete el campo.
        </div>
    </div>

    <div class="col-md-6">
        <label for="reeferEstimado">Reefe</label>
        <input type="number" class="form-control" name="reeferEstimado" id="reeferEstimado" required>
        <div class="invalid-feedback">
            Complete el campo.
        </div>
        </div>
        <div class="col-md-6">
        <label for="feeEstimado">Fee</label>
        <input type="number" class="form-control" name="feeEstimado" id="feeEstimado" required>
        <div class="invalid-feedback">
            Complete el campo.
        </div>
    </div>

    <!--<div class="form-group">
        <label for="totalEstimado">Total</label>
        <input type="number" class="form-control" name="totalEstimado" id="totalEstimado" required>
        <div class="invalid-feedback">
            Complete el campo.
        </div>
    </div>-->

    <!--SECCION Personal-->

    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Personal</h4>
    
        <label for="dniChofer">Chofer</label>
        
       
  
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Dni</th>
                <th></th>           
            </tr>
        </thead>
        <tbody>
            {{#empleados}}
            <tr>
                <td>{{nombreApellido}}</td>
                <td>{{dni}}</td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="dniChofer" value ="{{dni}}" id="dniChofer" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        ASIGNAR
                    </label>
                    <div class="invalid-feedback">
                        Asigne un chofer.
                    </div>
                </div>
                </td>
            </tr>
            {{/empleados}}
        </tbody>
    </table>
        <div class="invalid-feedback">
            Ingrese DNI del chofer.
        </div>
    </div>
    
    <div class="container d-flex justify-content-center">
    <button type="submit" name="submit" class="btn btn-dark">Registrar proforma</button>
    </div>

</form>
</div>

<script src="../functions.js"></script>
<!--
    SECCION Costeo REAL
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Costeo (REAL)</h4>

    <div class="form-group">
        <label for="kilometrosReal">Kilometros (REAL)</label>
        <input type="number" class="form-control" name="kilometrosReal" id="kilometrosReal">
    </div>

    <div class="form-group">
        <label for="combustibleReal">Combustible(REAL)</label>
        <input type="number" class="form-control" name="combustibleReal" id="combustibleReal">
    </div>

    <div class="form-group">
        <label for="etdCosteoReal">ETD(REAL)</label>
        <input type="number" class="form-control" name="etdCosteoReal" id="etdCosteoReal">
    </div>

    <div class="form-group">
        <label for="etaCosteoReal">ETA(REAL)</label>
        <input type="number" class="form-control" name="etaCosteoReal" id="etaCosteoReal">
    </div>

    <div class="form-group">
        <label for="viaticosReal">Viaticos(REAL)</label>
        <input type="number" class="form-control" name="viaticosReal" id="viaticosReal">
    </div>

    <div class="form-group">
        <label for="peajesPesajesReal">Peajes y Pesajes(REAL)</label>
        <input type="number" class="form-control" name="peajesPesajesReal" id="peajesPesajesReal">
    </div>

    <div class="form-group">
        <label for="extrasReal">Extras(REAL)</label>
        <input type="number" class="form-control" name="extrasReal" id="extrasReal">
    </div>

    <div class="form-group">
        <label for="hazardReal">Hazard(REAL)</label>
        <input type="number" class="form-control" name="hazardReal" id="hazardReal">
    </div>

    <div class="form-group">
        <label for="reeferReal">Reefer(REAL)</label>
        <input type="number" class="form-control" name="reeferReal" id="reeferReal">
    </div>

    <div class="form-group">
        <label for="feeReal">Fee(REAL)</label>
        <input type="number" class="form-control" name="feeReal" id="feeReal">
    </div>

    <div class="form-group">
        <label for="totalReal">Total (REAL)</label>
        <input type="number" class="form-control" name="totalReal" id="totalReal">
    </div>

-->

{{>footer}}