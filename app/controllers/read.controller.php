<script>
    const eliminarContacto = (id) => {
        Swal.fire({
            title: '¿Estás seguro de eliminar este empleado?',
            text: '¡Si lo borras no podrás recuperar su información!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f77f00',
            cancelButtonColor: '#d90429',
            confirmButtonText: 'Borrar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = `./delete&id=${id}`;
            } else {
            }
        });
    };
</script>
