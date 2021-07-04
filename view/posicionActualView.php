{{>headerLogeado}}

<a href="/homeChofer"><button class="btn btn-dark my-3">Volver a Home</button></a>

<div class="container-md my-3 col-md-6">
<h3 class="my-3">Carga de posicion actual</h3>
</div>
<div class="container-md my-3 col-md-6">
    <form action="/homeChofer/procesarPosicionActual" method="POST">
    <div class="form-group">
        <label for="kilometrosRecorridos">Kilometros recorridos</label>
        <input type="number" class="form-control" name="kilometrosRecorridos" id="kilometrosRecorridos">
    </div>
    <hr class="bg-dark d-block py-1">
    <div class="form-group">
        <label for="combustibleGastado">Combustible gastado</label>
        <input type="number" class="form-control" name="combustibleGastado" id="combustibleGastado">
    </div>
    <div class="form-group">
        <label for="peajes">Peajes</label>
        <input type="number" class="form-control" name="peajes" id="peajes">
    </div>
    <div class="form-group">
        <label for="extras">Extras</label>
        <input type="number" class="form-control" name="extras" id="extras">
    </div>
    <button type="submit" name="submit" class="btn btn-dark">Registrar Proforma</button>
    </form>
</div>