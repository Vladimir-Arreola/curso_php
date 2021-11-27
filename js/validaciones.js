function validaFormulario() {
    const nombre = document.getElementById('nombre').value;
    const correo = document.getElementById('paginas').value;
 
    function alert(titulo, texto) {
        Swal.fire({
            icon: 'error',
            title: titulo,
            text: texto
          });
    }

    if (nombre.length == 0) {
       alert('Errorsote', 'No has ingresado tu correo');
        document.getElementById('nombre').focus();
        return false;
    } else if (correo.length == 0) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'No has ingresado tu correo!',
          });
        document.getElementById('paginas').focus();
        return false;
    }
}