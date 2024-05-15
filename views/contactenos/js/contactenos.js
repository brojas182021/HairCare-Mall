$("#envia").on("click",function(event){
    event.preventDefault();

    // Validar campos
    let name = $("#nombre").val();
    let email = $("#email").val();

    if(name === "" || email === "") {
        // Si algún campo está vacío, mostrar alerta de error
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor, complete todos los campos.',
            confirmButtonColor: '#FF9A76'
        });
        return;
    }

    Swal.fire({
        title: 'Envio realizado',
        text: 'En breve nos pondremos en contacto',
        icon: 'success',
        confirmButtonText: 'Continuar',
        confirmButtonColor: '#679B9B'
    }).then((result) => {
        // Si se hace clic en "Genial", recargar la página
        if (result.isConfirmed) {
            window.location.href = '/haircare-mall'; // Cambiar 'nueva_pagina.html' por la URL deseada
        }
    });
});