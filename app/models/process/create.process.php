<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->create([
        "id" => $_POST["id"],
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"],
        "telefono" => $_POST["telefono"],
        "correo" => $_POST["correo"],
        "departamento_id" => $_POST["departamento_id"],
    ])
?>