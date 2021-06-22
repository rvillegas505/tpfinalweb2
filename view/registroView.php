{{> header}}
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="../functions.js"></script>
</head>

    <!--FORM-->
    <div class="container-sm my-3 d-flex justify-content-center">
        <h4>Registrarse</h4>
    </div>
    <div class="container-sm my-3 d-flex justify-content-center">
    <form action="/registro/procesarFormulario" class="row g-3 needs-validation" method="POST" novalidate>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nombre y Apellido</label>
    <input type="text" class="form-control" name="nombre" id="validationCustom01" required>
    <div class="invalid-feedback">
      Complete el campos con su nombre y apellido.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">DNI</label>
    <input type="number" class="form-control" name="dni" id="validationCustom02" required>
    <div class="invalid-feedback">
     Complete el campo con su DNI.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="fechaNac" id="validationCustom03" required>
    <div class="invalid-feedback">
      Seleccione su fecha de nacimiento.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <input type="email" class="form-control" name="email" id="validationCustomUsername" aria-describedby="emailHelp" required>
      <div class="invalid-feedback">
        Email no valido.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="validationCustom03" required>
    <div class="invalid-feedback">
      Ingrese una contraseña segura.
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-dark">Registrarse</button>
  </div>
</form>
    </div> 
<div class="container-fluid my-2 d-flex justify-content-center">
        <small>Usted recibirá un email para la confirmación de su cuenta. Luego el administrador
            le asignará su rol correspondiente en la empresa.
        </small>
    </div>
    
<script src="../functions.js"></script>



{{> footer}}