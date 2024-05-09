<?php 

class Catalogo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->productos = [];
    }

    function render(){
        $productos = $this->model->getProducts();
        $this->view->productos = $productos;
        $this->view->render('catalogo/catalogo');
    }
}
?>