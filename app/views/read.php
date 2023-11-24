<div class="container">
    <div class="row my-4">
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-secondary">

                <thead>
                    <h3>DYZFORIANOS</h3>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contactos as $contacto):
                        ?>
                        <tr>
                            <td>
                                <?php echo $contacto["nombre"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["apellido"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["telefono"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["correo"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["departamento_id"] ?>
                            </td>

                            <td>
                                    <a href="./update&id=<?php echo $contacto["id"] ?>" class="btn btn-warning btn-custom">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                
                            </td>
                            <td>
                                    <button onclick="eliminarContacto(<?php echo $contacto['id'] ?>)"class="btn btn-danger btn-custom1">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <span>
        <a href="./create" id="contacto" class="btn btn-outline-custom">
            <i class="fas fa-plus-circle"></i> Agregar Personal
        </a>
    </span>

</div>

<?php
require "./app/controllers/read.controller.php"
    ?>