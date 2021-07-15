{{>headerLogeado}}

<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="../functions.js"></script>
</head>

<a href="/homeadmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

<div class="container-md my-3 col-md-6">
    <h3 class="my-3">Carga de Tractor</h3>
</div>

<div class="container-md my-3 col-md-6">
    <form action="/tractor/procesarTractor" class="row g-3 needs-validation" method="POST" novalidate>

        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" name="marca" id="marca" required>
            <div class="invalid-feedback">
                Ingrese marca del tractor.
            </div>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="modelo" required>
            <div class="invalid-feedback">
                Ingrese modelo del tractor.
            </div>
        </div>
        <div class="form-group">
            <label for="patente">Patente</label>
            <input type="text" class="form-control" name="patente" id="patente" required>
            <div class="invalid-feedback">
                Ingrese patente del tractor.
            </div>
        </div>
        <div class="form-group">
            <label for="motor">Motor</label>
            <input type="text" class="form-control" name="motor" id="motor" required>
            <div class="invalid-feedback">
                Ingrese motor del tractor.
            </div>
        </div>
        <div class="form-group">
            <label for="chasis">Chasis</label>
            <input type="text" class="form-control" name="chasis" id="chasis" required>
            <div class="invalid-feedback">
                Ingrese chasis del tractor.
            </div>
        </div>

        <div class="container d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-dark">Registrar Tractor</button>
        </div>

</form>
</div>

<script src="../functions.js"></script>

{{>footer}}
