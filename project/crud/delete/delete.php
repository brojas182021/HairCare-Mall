<?php

include("../../shared/conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM producto  WHERE prod_codigo='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /haircare-mall/project/crud/crud.php");
    }
?>
