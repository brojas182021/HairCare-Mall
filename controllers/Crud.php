<?php 

class Crud extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->productos = [];
    }

    function render(){
        $productos = $this->model->get();
        $this->view->productos = $productos;
        $this->view->render('crud/crud');
    }
}
?>