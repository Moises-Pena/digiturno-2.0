<?php
require "../template/header.php";
?>

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card mb-4">
    <h5 class="card-header">Generar Turno</h5>
    <div class="card-body">

      <div class="row mb-4">
      <div class="col-4">
          <select id="tipodocumento" name="tipodocumento" class="form-select">
            <option value="" readonly>Seleccionar Tipo Documento</option>
            <option value="CC">Código de empleado</option>
          </select>
        </div>
        <div class="col-4">
          <input type="text" id="numerodocumento" name="numerodocumento" class="form-control" placeholder="Digite su código" />
        </div>
        <div class="col-4">
          <button type="button" Onclick="BuscarCliente()" class="btn btn-primary float-right">Crear turno</button>
        </div>
      </div>
      <div id="verdatoscliente">
      <div class="row">
        <div class="col-6 mb-2">
          <label class="form-label">Documento</label>
          <select id="documento" name="documento" class="form-select">
            <option value="" disabled>Seleccionar</option>
            <option value="CC">Código de empleado</option>
          </select>
        </div>
        <div class="col-6 mb-2">
          <label class="form-label">Código</label>
          <input type="text" id="numero" name="numero" class="form-control" />
        </div>
      </div>
      <div class="row">
        <div class="col-3 mb-2">
          <label class="form-label">Nombre(s)</label>
          <input type="text" id="pnombre" name="pnombre" class="form-control" />
        </div>
        
        <div class="col-3 mb-2">
          <label class="form-label">Apellido(s)</label>
          <input type="text" id="papellido" name="papellido" class="form-control" />
          <input type="hidden" id="registrarcliente" name="registrarcliente"/>
        </div>
      
      </div>
        <div id="contedinoservicios" class="row mt-4">
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require "../template/footer.php";
?>
<script src="../../controllers/generarturnoController.js"></script>