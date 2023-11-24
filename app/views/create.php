<div class="container">
    <div class="row">
        <div class="col">
            <h4>Agregar Personal</h4>
            <hr>
            <div>
                <div class="mb-3">
                    <label for="id" class="form-label">id</label>
                    <input type="number" class="form-control" id="id">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellido">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="telefono">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" class="form-control" id="correo">
                </div>
                <div class="mb-3">
                    <label for="departamento_id" class="form-label">Departamento</label>
                    <input type="text" class="form-control" id="departamento_id">
                </div>

            </div>
        </div>
    </div>
</div>
<button id="agregar" class="btn btn-outline-custom">Agregar Personal</button>

<?php 
    require "./app/controllers/create.controller.php"
?>




