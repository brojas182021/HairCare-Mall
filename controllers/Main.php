<?php 

class Main extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('home/home');
    }

    function saludo(){
        echo "<h1>Ejecucion Metodo Saludo</h1> ";
    }
}
?>