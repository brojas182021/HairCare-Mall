

<!DOCTYPE html>
<html lang="en">
    <?php
    require_once 'views/shared/head.php';
    require_once 'views/shared/navbarR.php';
    ?>
    <body>
    <style>

        body{
         width: 100%;
         height:100vh;
         background-color: #fafafa;
        }
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
        <div class="container mt-5 pt-5" style="width:95%; max-width:600px;">
        <div class="card box" >
            <div class="card-body">
            <form class="pt-3 pb-3" action="<?php echo constant('URL')?>crud/actualizarProducto" method="POST">
                    <h5>Actualizar producto</h5>
                    <input type="text" class="form-control mb-3" place_holder="Código" name="prod_codigo" value="<?php echo $this->producto->prod_codigo?>" hidden >
                    <input type="text" class="form-control mb-3" place_holder="Nombre" name="prod_nombre" value="<?php echo $this->producto->prod_nombre?>" required>
                    <input type="text" class="form-control mb-3" place_holder="Precio" name="prod_precio"  value="$<?php echo number_format($this->producto->prod_precio, 0, ',', '.') ?>" required >
                    <input type="text" class="form-control mb-3" place_holder="Stock" name="prod_stock" value="<?php echo $this->producto->prod_stock?>" required>
                    <input type="text" class="form-control mb-3" place_holder="Descripción" name="prod_descrip"  value="<?php echo $this->producto->prod_descrip?>" required>
                <div>
                <input type="submit" class="btn btn-primary btn-inline-block" value="Actualizar">
                <a class="btn btn-primary btn-inline-block" href="/haircare-mall/crud">Volver</a>
                </div>
        </form>
        
            </div>
                    
                </div>
        </div>
                
    </body>
</html>