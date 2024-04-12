<?php
include("../shared/conexion.php");
$con=conectar();
session_start();
if(!empty($_POST["btningresar"])){
        if(empty($_POST["usuario"]) and empty($_POST["password"])){

                echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS"</div>';
        } else{

            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql="select * from usuario where usua_nombre='$usuario' and usua_clave='$clave'";
            $query=mysqli_query($con,$sql);

            // if($query){
            //     Header("Location: /haircare-mall/project/crud/crud.php");
            // }
           
            
        }

}
?>