<?php
// Cargar el enrutador
require_once './app/config/router.php';

// Crear una instancia del enrutador y manejar la solicitud
$router = new Router();
$router->routeRequest();
?>