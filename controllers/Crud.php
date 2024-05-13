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

    function deleteProd($param = null) {
        $idProd = $param[0];

        $resultado = $this->model->deleteById($idProd);
        if ($resultado) {
            // Mostrar un alert en JavaScript indicando que la inserción fue exitosa
            echo '<script>alert("'.$resultado.'");</script>';
            echo "<script>window.location.href = '" . constant('URL') . "crud';</script>";
            $this->render();
        } else {
            // Mostrar un alert en JavaScript con el mensaje de error específico
            echo '<script>alert("'.$resultado.'");</script>';
            echo "<script>window.location.href = '" . constant('URL') . "crud';</script>";
            $this->render();
        }
        
     }
     function verProducto($param= null){
        $idProducto = $param[0];
        $producto = $this->model->getById($idProducto);

        session_start();
        $_SESSION['id_verProducto'] = $producto->prod_codigo;
        $this->view->producto = $producto;
        $this->view->mensaje= "";
        $this->view->render('crud/update/detalleProd');

     }

     function actualizarProducto($param= null){
       
        $prod_codigo  = $_POST['prod_codigo'];
        $prod_nombre  = $_POST['prod_nombre'];
        $prod_precio  = $_POST['prod_precio'];
        $prod_stock   = $_POST['prod_stock'];
        $prod_descrip = $_POST['prod_descrip'];
        unset($_SESSION['id_verProducto']);
       
    //  if($this->model->update(['prod_codigo' => $prod_codigo, 'prod_nombre' => $prod_nombre, 'prod_precioVenta' => $prod_precio, 'prod_Stock' => $prod_stock, 'prod_descripcion' => $prod_descrip])){
            
    //         $producto = new Product();
    //         $producto -> prod_codigo = $prod_codigo;
    //         $producto -> prod_nombre = $prod_nombre;
    //         $producto -> prod_precio = $prod_precio;
    //         $producto -> prod_stock = $prod_stock;
    //         $producto -> prod_descrip = $prod_descrip;
    //         $this->view->producto = $producto;
    //         $this->view->mensaje = "Producto Actualizado correctamente";
    //     }else{
    //         $this->view->mensaje = "Producto no se pudo actualizar";
    //     }
    //     $this->render('crud/detalleProd');


        $resultado =$this->model->update(['prod_codigo' => $prod_codigo, 'prod_nombre' => $prod_nombre, 'prod_precioVenta' => $prod_precio, 'prod_Stock' => $prod_stock, 'prod_descripcion' => $prod_descrip]);
        if ($resultado) {
            // Mostrar un alert en JavaScript indicando que la inserción fue exitosa
            echo '<script>alert("'.$resultado.'");</script>';
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