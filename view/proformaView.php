{{>headerLogeado}}

<a href="/homeAdmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

<div class="container-md my-3 col-md-6">
<h3 class="my-3">Carga de Proforma</h3>
</div>

<div class="container-md my-3 col-md-6">
    <form action="/proforma/procesarProforma" method="POST">
    <div class="form-group">
        <label for="fechaProforma">Fecha</label>
        <input type="date" class="form-control" name="fechaProforma" id="fechaProforma">
    </div>

    <!--SECCION CLIENTE-->
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Cliente</h4>

    <div class="form-group">
        <label for="cuitCliente">CUIT</label>
        <input type="number" class="form-control" name="cuit" id="cuitCliente">
    </div>
    <div class="form-group">
        <label for="direccionCliente">Direccion</label>
        <input type="text" class="form-control" name="direccionCliente" id="direccionCliente">
    </div>
    <div class="form-group">
        <label for="telefonoCliente">Telefono</label>
        <input type="number" class="form-control" name="telefonoCliente" id="telefonoCliente">
    </div>
    <div class="form-group">
        <label for="emailCliente">Email</label>
        <input type="email" class="form-control" name="emailCliente" id="emailCliente">
    </div>

    <!--SECCION VIAJE-->
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Viaje</h4>

    <div class="form-group">
        <label for="origenViaje">Origen</label>
        <input type="text" class="form-control" name="origenViaje" id="origenViaje">
    </div>

    <div class="form-group">
        <label for="destinoViaje">Destino</label>
        <input type="text" class="form-control" name="destinoViaje" id="destinoViaje">
    </div>

    <div class="form-group">
        <label for="fechaCarga">Fecha de Carga</label>
        <input type="date" class="form-control" name="fechaCarga" id="fechaCarga">
    </div>

    <div class="form-group">
        <label for="etaViaje">ETA (en horas)</label>
        <input type="number" class="form-control" name="etaViaje" id="etaViaje">
    </div>

    <!--SECCION CARGA-->
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Viaje</h4>

    <div class="form-group">
        <label for="tipoCarga">Tipo De Carga</label>
        <select class="form-control" id="tipoCarga">
            <option name="granel" value="granel">granel</option>
            <option name="liquida" value="liquida">liquida</option>
            <option name="20" value="20">20</option>
            <option name="40" value="40">40</option>
            <option name="jaula" value="jaula">jaula</option>
            <option name="carcarrier" value="carcarrier">carcarrier</option>
        </select> 
    </div>
    
    <div class="form-group">
        <label for="pesoNeto">Peso Neto</label>
        <input type="number" class="form-control" name="pesoNeto" id="pesoNeto">
    </div>

    <!--SECCION Costeo-->
    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Costeo (ESTIMADO)</h4>

    <div class="form-group">
        <label for="kilometrosEstimado">Kilometros (ESTIMADO)</label>
        <input type="number" class="form-control" name="kilometrosEstimado" id="kilometrosEstimado">
    </div>

    <div class="form-group">
        <label for="combustibleEstimado">Combustible (ESTIMADO)</label>
        <input type="number" class="form-control" name="combustibleEstimado" id="combustibleEstimado">
    </div>

    <div class="form-group">
        <label for="etdCosteoEstimado">ETD (ESTIMADO)</label>
        <input type="number" class="form-control" name="etdCosteoEstimado" id="etdCosteoEstimado">
    </div>

    <div class="form-group">
        <label for="etaCosteoEstimado">ETA (ESTIMADO)</label>
        <input type="number" class="form-control" name="etaCosteoEstimado" id="etaCosteoEstimado">
    </div>

    <div class="form-group">
        <label for="viaticosEstimado">Viaticos (ESTIMADO)</label>
        <input type="number" class="form-control" name="viaticosEstimado" id="viaticosEstimado">
    </div>

    <div class="form-group">
        <label for="peajesPesajesEstimado">Peajes y Pesajes (ESTIMADO)</label>
        <input type="number" class="form-control" name="peajesPesajesEstimado" id="peajesPesajesEstimado">
    </div>

    <div class="form-group">
        <label for="extrasEstimado">Extras (ESTIMADO)</label>
        <input type="number" class="form-control" name="extrasEstimado" id="extrasEstimado">
    </div>

    <div class="form-group">
        <label for="hazardEstimado">Hazard (ESTIMADO)</label>
        <input type="number" class="form-control" name="hazardEstimado" id="hazardEstimado">
    </div>

    <div class="form-group">
        <label for="reeferEstimado">Reefer (ESTIMADO)</label>
        <input type="number" class="form-control" name="reeferEstimado" id="reeferEstimado">
    </div>

    <div class="form-group">
        <label for="feeEstimado">Fee (ESTIMADO)</label>
        <input type="number" class="form-control" name="feeEstimado" id="feeEstimado">
    </div>

    <div class="form-group">
        <label for="totalEstimado">Total (ESTIMADO)</label>
        <input type="number" class="form-control" name="totalEstimado" id="totalEstimado">
    </div>

    <!--SECCION Costeo REAL-->
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



    <!--SECCION Personal-->

    <hr class="bg-dark d-block py-1">
    <h4 class="my-3">Personal</h4>

    <div class="form-group">
        <label for="dniChofer">Chofer (DNI)</label>
        <input type="number" class="form-control" name="dniChofer" id="dniChofer">
    </div>
    
    <button type="submit" name="submit" class="btn btn-dark">Registrar Proforma</button>
    </form>
</div>


{{>footer}}