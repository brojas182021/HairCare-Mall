<?php
require_once './app/controllers/mainController.php';

class Router {
    private $routes = [
        '/' => 'home',
        'haircare-mall/catalogo' => 'catalogo',
        'haircare-mall/inicio-sesion' => 'inicioSesion',
        'haircare-mall/mas-informacion' => 'masInformacion',
        'haircare-mall/contacto' => 'contacto',
        'haircare-mall/crud' => 'gestionProd'
        // Agrega más rutas según sea necesario
    ];
    
    public function routeRequest() {
        $url = trim($_GET['url'] ?? '/', '/');


        // Si la URL está vacía o tiene un "/" se carga la vista de home
        if ($url === '' || $url === '/') {
            $controller = new MainController();
            $controller->home();
            return;
        }

        $controller = new MainController(); // Instancia de MainController después de incluir el archivo controller.php

        // Obtener el nombre de la acción correspondiente a la ruta
        $actionName = $url;
        
    
        if ($actionName !== null && method_exists($controller, $actionName)) {
            $controller->{$actionName}();
        } else {
            include('views/404.php');
        }
    }
}
?>
