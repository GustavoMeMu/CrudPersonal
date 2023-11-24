<script>
    $(document).ready(() => {

        $("#actualizar").click(() => {
            let id = $("#id").val()
            let nombre = $("#nombre").val()
            let apellido = $("#apellido").val()
            let telefono = $("#telefono").val()
            let correo = $("#correo").val()
            let departamento_id = $("#departamento_id").val()

            $.ajax({
                data: {
                    id,
                    nombre,
                    apellido,
                    telefono,
                    correo,
                    departamento_id
                },
                url: "./app/models/process/update.process.php",
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Empleado Actualizado',
                        text: "Actualizaste la información del empleado correctamente",
                        icon: 'success',
                        confirmButtonColor: '#cc2db0',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./read"
                        }
                    })
                },
                error: () => {
                    Swal.fire({
                        title: 'Contacto no actualizado',
                        text: "No se pudo actualizar la información del empleado",
                        icon: 'error',
                        confirmButtonColor: '#fd7e14',
                        confirmButtonText: 'Reintentar'
                    })
                }
            })
        })
    })
</script>