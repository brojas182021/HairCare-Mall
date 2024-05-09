<!DOCTYPE html>
<html lang="en">
    <?php
            require_once 'views/shared/head.php';
    ?>
    <style>
        .banner{
            margin: 8rem auto;
            width:100%;
            height:auto;
        }

        .container-fluid{
            padding:40px 20px;
            width:100%;
            background-color:#EEEEEE;
        }
        .custom-gap {
      gap: 20px; /* Puedes ajustar este valor según tus necesidades */
    }

    .product-card{
        width: 100%;
        min-widt:170px;
    }
    </style>
    <body>
        <?php
            require_once 'views/shared/navbar.php';
        ?>

        <!-- Sección de descripción (banner) -->
        <div class="banner text-center pt-5">
            <h1>Bienvenido a nuestra tienda</h1>
            <p>Descubre nuestros productos destacados y encuentra lo que necesitas.</p>
        </div>

        <!-- Sección de productos -->
        <div class="container-fluid">
            <div class="row product-list">
                <div class="col-lg-12 d-flex custom-gap">
                    <?php 
                        include_once 'models/Product.php';
                        
                        foreach($this->productos as $row){
                            $producto = new Product();
                            $producto = $row;
                    ?>
                    <div class="card product-card p-2">
                        <img src="<?php echo constant('URL')?>public/assets/logo_system.png" class="card-img-top" alt="Producto 1" style="max-width:240px; margin: 0 auto;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto->prod_nombre?></h5>
                            <p class="card-text"><?php echo $producto->prod_descrip?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-muted">$<?php echo $producto->prod_precio?></h6>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>

        <?php
         require_once 'views/shared/footer.php';
        ?>    
    </body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</html>