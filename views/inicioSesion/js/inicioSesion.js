function enviarFormulario(event) {
    event.preventDefault(); // Evitar la recarga de la página

    // Obtener los datos del formulario
    var correo = $('#usuario').val();
    var contrasena = $('#password').val();

    // Enviar los datos mediante AJAX
    $.ajax({
        type: "POST",
        url: "./app/controllers/mainController.php",
        dataType: "JSON",
        data: { action: 'verificarCredenciales', usuario: correo, password: contrasena },
        success: function(response) {
            console.log(response); // Verificar la respuesta en la consola del navegador
            console.log(xhr.responseText);
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText); // Mostrar el mensaje de error en la consola
            alert("Error al enviar el formulario");
        }
    });
}
