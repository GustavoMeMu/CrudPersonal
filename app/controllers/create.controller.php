<script>
    $(document).ready(() => {
        $("#agregar").click(() => {
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
                url: "./app/models/process/create.process.php",
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Personal agregado',
                        text: "El empleado fue agregado con exito!",
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
                        title: 'Personal no agregado',
                        text: "No se pudo agregar la información del empleado",
                        icon: 'error',
                        confirmButtonColor: '#fd7e14',
                        confirmButtonText: 'Reintentar'
                    })
                }
            })
        })
    })
</script>