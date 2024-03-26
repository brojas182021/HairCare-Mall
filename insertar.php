<?php
include("conexion.php");
$con=conectar();

$prod_codigo=$_POST['prod_codigo'];
$prod_nombre=$_POST['prod_nombre'];
$prod_precioVenta=$_POST['prod_precioVenta'];
$prod_Stock=$_POST['prod_Stock'];
$prod_descripcion=$_POST['prod_descripcion'];


$sql="INSERT INTO producto VALUES('$prod_codigo','$prod_nombre','$prod_precioVenta','$prod_Stock','$prod_descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: crud.php");
    
}else {
}
?>