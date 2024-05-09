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

    function insertProd(){
            $prod_codigo  = $_POST['prod_codigo'];
            $prod_nombre  = $_POST['prod_nombre'];
            $prod_precio  = $_POST['prod_precioVenta'];
            $prod_stock   = $_POST['prod_Stock'];
            $prod_descrip = $_POST['prod_descripcion'];

        $resultado = $this->model->insert(['prod_cod'=> $prod_codigo, 'prod_nombre' => $prod_nombre, 'prod_precio' => $prod_precio, 'prod_stock' => $prod_stock, 'prod_descrip' => $prod_descrip]);
             // Verificar si el resultado es el mensaje de éxito del modelo
        if ($resultado === 'Inserción exitosa en ambas bases de datos.') {
            // Mostrar un alert en JavaScript indicando que la inserción fue exitosa
            echo "<script>alert('Inserción exitosa en ambas bases de datos.');</script>";
            echo "<script>window.location.href = '" . constant('URL') . "crud';</script>";
            $this->render();
        } else {
            // Mostrar un alert en JavaScript con el mensaje de error específico
            echo '<script>alert("'.$resultado.'");</script>';
            echo "<script>window.location.href = '" . constant('URL') . "crud';</script>";
            $this->render();
        }
    }
}
?>