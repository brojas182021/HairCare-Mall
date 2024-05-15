<!DOCTYPE html>
<html lang="en">
    <?php
            require_once 'views/shared/head.php';
    ?>
    <style>
        .banner{
            width: 80%;
            margin: 8rem auto 1rem;
            padding: 2rem;
            width: 100%;
            height: 380px;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction:column;
        }

        .banner p{
            margin-top:0.5rem;
        }

        .container-fluid{
            width:100%;
            background-color:white;
        }
        .custom-gap {
            gap: 20px;
        }

        .container-cards{
            margin:1rem auto 4rem;
            width: 90%;
            display:grid;
            grid-template-columns: repeat(1 , 1fr);
            justify-content:center;
            align-items:center;
            gap:30px;
        }

        .product-card{
            margin:0 auto;
            width: 100%;
            max-width: 250px;
            background-color:#fafafa;
            border:none;
            box-shadow: 0 7px 11px 0 rgb(0 0 0 / 10%), 0 4px 6px 0 rgb(0 0 0 / 10%);
        }

        @media(min-width:768px){
            .container-cards{
                max-width:900px;  
                grid-template-columns: repeat(3 , 1fr);
                gap:36px;
            }
            .product-card{
                max-width: 280px;
            }
            .banner{
                margin: 5rem auto 1rem;
                flex-direction:row;
            }
            .banner p{
                font-size:18px;
            }
        }
    </style>

    <body>
        <?php
            require_once 'views/shared/navbar.php';
        ?>

        <!-- Sección de descripción (banner) -->
        <div class="banner text-left">
            <div class="content-text">
                <h1>Catalogo de productos</h1>
                <p>Explora la variedad de productos registrados con una visualización sencilla.</p>
            </div>
            <img src="<?php echo constant('URL')?>/public/assets/catalogo-animado.gif"   alt="" align="right" style="width:280px;">
        </div>

        <!-- Sección de productos -->
        <div class="container-fluid">
            <div class="row product-list">
                <div class="col-lg-12 container-cards">
                    <?php 
                        include_once 'models/Product.php';
                        
                        foreach($this->productos as $row){
                            $producto = new Product();
                            $producto = $row;
                    ?>
                    <div class="card product-card p-3">
                        <img src="<?php echo constant('URL')?>public/assets/productos.jpg" class="card-img-top" alt="Producto 1" style="max-width:240px; margin: 0 auto;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto->prod_nombre?></h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-muted">$<?php echo number_format($producto->prod_precio, 0, ',', '.')?></h6>
                                <h6><b>Stock: <?php echo $producto->prod_stock?></b></h6>
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