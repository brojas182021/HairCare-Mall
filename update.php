<?php

include("conexion.php");
$con=conectar();

$prod_codigo=$_POST['prod_codigo'];
$prod_nombre=$_POST['prod_nombre'];
$prod_precioVenta=$_POST['prod_precioVenta'];
$prod_Stock=$_POST['prod_Stock'];
$prod_descripcion=$_POST['prod_descripcion'];

$sql="UPDATE producto SET  prod_nombre='$prod_nombre',prod_precioVenta='$prod_precioVenta',prod_Stock='$prod_Stock',prod_descripcion='$prod_descripcion'  WHERE prod_codigo='$prod_codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
?>