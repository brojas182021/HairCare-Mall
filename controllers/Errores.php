<?php

require_once 'libs/Controller.php';

class Errores extends Controller{

    function __construct(){
        parent::__construct();
        echo "<p>Error al cargar el recurso</p>";
    }
}
?>