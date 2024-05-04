<?php 

class InicioSesion extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('inicioSesion/inicioSesion');
    }


    function consultarUsuario(){
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];

        $this->model->consultar(['usuario'=> $usuario , 'clave' => $clave]);
    }
}
?>