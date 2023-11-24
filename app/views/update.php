<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar Información</h1>
            <hr>
            <div>
                <input type="number" value="<?php echo $contacto["id"]?>" class="form-control" id="id" hidden>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" value="<?php echo $contacto["nombre"]?>" class="form-control" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellidos</label>
                    <input type="text" value="<?php echo $contacto["apellido"] ?>" class="form-control" id="apellido">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number" value="<?php echo $contacto["telefono"] ?>" class="form-control" id="telefono">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" value="<?php echo $contacto["correo"] ?>" class="form-control" id="correo">
                </div>
                <div class="mb-3">
                    <label for="departamento_id" class="form-label">Nombre Departamento</label>
                    <input type="number" value="<?php echo $contacto["departamento_id"] ?>" class="form-control" id="departamento_id">
                </div>
            </div>
        </div>
    </div>
    <span>
    <button id="actualizar" class="btn btn-outline-custom">Actualizar Informacion</button>
    </span>
</div>

<?php 
    require "./app/controllers/update.controller.php"
?>