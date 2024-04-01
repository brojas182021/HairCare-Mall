<?php

require_once './app/views/views.php';

class MainController {
    private $views;

    public function __construct() {
        $this->views = new Views();
    }

    public function home() {
        // Lógica para la página de inicio
        $this->views->load('home');
    }

    public function catalogo() {
        // Lógica para la página de catálogo
        $this->views->load('catalogo');
    }

    public function inicioSesion() {
        // Lógica para la página de inicio de sesión
        $this->views->load('inicioSesion');
    }

    public function masInformacion() {
        // Lógica para la página de más información
        $this->views->load('mas_informacion');
    }

    public function contacto() {
        // Lógica para la página de contacto
        $this->views->load('contacto');
    }
}

?>
