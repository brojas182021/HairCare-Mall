<?php

include __DIR__ . '/../config/config.php'; // Ruta al archivo de configuración
include __DIR__ . '/../models/usuario/usuario.php'; // Ruta al modelo de usuario
include __DIR__ . '/../views/views.php'; // Ruta al archivo de vistas

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

    public function crud() {
        $this->views->load('crud');
    }

    public function verificarCredenciales() {
        echo "hola";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['action']) && $_POST['action'] == 'verificarCredenciales') {
                // Obtener los datos del formulario
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];

                // Crear una instancia del modelo UsuarioModel
                $usuarioModel = new UsuarioModel();
                // Verificar las credenciales utilizando el modelo
                if ($usuarioModel->verificarCredenciales($usuario, $password)) {
                    // Redirigir a otra página después de iniciar sesión
                    echo "hola";
                    
                } else {
                    echo "Credenciales incorrectas"; // O mostrar un mensaje de error en la misma página
                }
            }
        }
    }


    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'verificarCredenciales':
                $this->verificarCredenciales();
                break;
            // Otros casos para manejar diferentes acciones
        }
    }

}

?>
