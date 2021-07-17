{{>headerLogeado}}

<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="../functions.js"></script>
</head>

<a href="/homeadmin/vertractores"><button class="btn btn-dark my-3">Volver a la lista</button></a>

<div class="container-md my-3 col-md-6">
    <h3 class="my-3">Editar Tractor</h3>
</div>
{{#tractores}}

<div class="container-md my-3 col-md-6">
    <form action="/homeadmin/editarTractor" class="row g-3 needs-validation" method="POST" novalidate>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" name="marca" id="marca" value="{{tractor_marca}}"required>
            <div class="invalid-feedback">
                Ingrese marca del tractor.
            </div>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="modelo" value="{{tractor_modelo}}" required>
            <div class="invalid-feedback">
                Ingrese modelo del tractor.
            </div>
        </div>
        <div class="form-group">
            <label for="patente">Patente</label>
            <input type="text" class="form-control" name="patente" id="patente" value="{{tractor_patente}}" required>
            <div class="invalid-feedback">
                Ingrese patente del tractor.
            </div>
        </div>
        <div class="form-group">
            <label for="motor">Motor</label>
            <input type="text" class="form-control" name="motor" id="motor" value="{{tractor_motor}}" required>
            <div class="invalid-feedback">
                Ingrese motor del tractor.
            </div>
        </div>
        <div class="form-group">
            <label for="chasis">Chasis</label>
            <input type="text" class="form-control" name="chasis" id="chasis" value="{{tractor_chasis}}" required>
            <div class="invalid-feedback">
                Ingrese chasis del tractor.
            </div>
        </div>
        <label for="arrastrado">Arrastre</label>
        <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Patente</th>
                <th>Tipo</th>
                <th>Chasis</th>
                <th></th>           
            </tr>
        </thead>
        <tbody>
            {{#arrastrado}}
            <tr>
                <td>{{arrastrado_patente}}</td>
                <td>{{arrastrado_tipo}}</td>
                <td>{{arrastrado_chasis}}</td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="patenteArrastrado" value ="{{arrastrado_patente}}" id="patenteArrastrado" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        ASIGNAR
                    </label>
                    <div class="invalid-feedback">
                        Asigne un arrastre.
                    </div>
                </div>
                </td>
            </tr>
            {{/arrastrado}}
        </tbody>
    </table>
        <div class="container d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-dark">Registrar Tractor</button>
        </div>
        {{/tractores}}
    </form>
</div>
<script src="../functions.js"></script>
{{>footer}}
