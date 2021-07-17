{{>headerLogeado}}

<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="../functions.js"></script>
</head>

<a href="/homeadmin"><button class="btn btn-dark my-3">Volver a Home</button></a>

<div class="container-md my-3 col-md-6">
    <h3 class="my-3">Carga de Arrastrado</h3>
</div>

<div class="container-md my-3 col-md-6">
    <form action="/arrastrado/procesarArrastrado" class="row g-3 needs-validation" method="POST" novalidate>
        <label for="tipo">Tipo</label>
        <select class="form-select" aria-label="Default select example" name="tipo" required>
            <option value="Araña" selected>Araña</option>
            <option value="Jaula">Jaula</option>
            <option value="Tanque">Tanque</option>
            <option value="Granel">Granel</option>
            <option value="CarCarrier">CarCarrier</option>
        </select>
        <div class="form-group">
            <label for="patente">Patente</label>
            <input type="text" class="form-control" name="patente" id="patente" placeholder="AA111BB" required>
            <div class="invalid-feedback">
                Ingrese patente del arrastrado.
            </div>
        </div>
        <div class="form-group">
            <label for="chasis">Chasis</label>
            <input type="text" class="form-control" name="chasis" id="chasis" placeholder="123456" required>
            <div class="invalid-feedback">
                Ingrese chasis del arrastrado.
            </div>
        </div>

        <div class="container d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-dark">Registrar Arrastrado</button>
        </div>

    </form>
</div>

<script src="../functions.js"></script>

{{>footer}}
