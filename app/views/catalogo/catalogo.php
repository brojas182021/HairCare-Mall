<!DOCTYPE html>
<html lang="en">
    <?php
            include('./app/views/shared/head.php');
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
    </style>
    <body>
        <?php
            include('./app/views/shared/navbar.php');
        ?>

        <!-- Sección de descripción (banner) -->
        <div class="banner text-center pt-5">
            <h1>Bienvenido a nuestra tienda</h1>
            <p>Descubre nuestros productos destacados y encuentra lo que necesitas.</p>
        </div>

        <!-- Sección de productos -->
        <div class="container-fluid">
            <div class="row product-list">
                <div class="col-lg-4">
                    <div class="card product-card p-2">
                        <img src="../img/logo_system.png" class="card-img-top" alt="Producto 1" style="max-width:240px; margin: 0 auto;">
                        <div class="card-body">
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">Descripción breve del producto 1.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-muted">$50</h6>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('./app/views/shared/footer.php');
        ?>    
    </body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</html>