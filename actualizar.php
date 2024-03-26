<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM producto WHERE prod_codigo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
include('navbarR.php');
?>
    <body>
    <style>

        .card {margin: 25px;
        border-radius: 15px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        border: none;
        }

        .card form{
            padding-top:20px;
            display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 10px;
        }
       
        </style>
        <div class="container mt-5 pt-5" style="width:600px">
        <div class="card box" >
            <div class="card-body">
            <form action="update.php" method="POST">
                    
                    <input type="hidden" name="prod_codigo" value="<?php echo $row['prod_codigo']  ?>">
                    
                    <input type="text" class="form-control mb-3" name="prod_nombre" placeholder="Dni" value="<?php echo $row['prod_nombre']  ?>">
                    <input type="text" class="form-control mb-3" name="prod_precioVenta" placeholder="Nombres" value="<?php echo $row['prod_precioVenta']  ?>">
                    <input type="text" class="form-control mb-3" name="prod_Stock" placeholder="Apellidos" value="<?php echo $row['prod_Stock']  ?>">
                    <input type="text" class="form-control mb-3" name="prod_descripcion" placeholder="Apellidos" value="<?php echo $row['prod_descripcion']  ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
        
            </div>
                    
                </div>
        </div>
                
    </body>
</html>