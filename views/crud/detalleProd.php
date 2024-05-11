

<!DOCTYPE html>
<html lang="en">
    <?php
    require_once 'views/shared/head.php';
    require_once 'views/shared/navbar.php';
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
            <form action="<?php echo constant('URL')?>crud/actualizarProducto" method="POST">
                    
                    <input type="text" class="form-control mb-3" name="prod_codigo" value="<?php echo $this->producto->prod_codigo?>" hidden >
                    <input type="text" class="form-control mb-3" name="prod_nombre"value="<?php echo $this->producto->prod_nombre?>">
                    <input type="text" class="form-control mb-3" name="prod_precio"  value="<?php echo $this->producto->prod_precio?>" >
                    <input type="text" class="form-control mb-3" name="prod_stock" value="<?php echo $this->producto->prod_stock?>">
                    <input type="text" class="form-control mb-3" name="prod_descrip"  value="<?php echo $this->producto->prod_descrip?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar Producto">
        </form>
        
            </div>
                    
                </div>
        </div>
                
    </body>
</html>