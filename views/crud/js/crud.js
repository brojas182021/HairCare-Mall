$(document).ready(function() {
    let botonAgrega = $('.boton-agrega');
    let modalInsertar = $('#modalInsertar');
    let closeModal = $('.close-modal');

    botonAgrega.on('click', function() {
        modalInsertar.addClass('active');
    });

    closeModal.on('click', function() {
        modalInsertar.removeClass('active');
    });
});