<!DOCTYPE html>
<html lang="en">
    <?php
        include('../shared/head.php');
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
            include('../shared/navbar.php');
        ?>

        <!-- Sección de descripción (banner) -->
        <div class="banner">
            <h1>Bienvenido a nuestra tienda</h1>
            <p>Descubre nuestros productos destacados y encuentra lo que necesitas.</p>
        </div>

        <!-- Sección de productos -->
        <div class="container-fluid">
            <div class="row product-list">
                <div class="col-lg-4">
                    <div class="card product-card">
                        <img src="ruta-a-imagen1.jpg" class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">Descripción breve del producto 1.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('../shared/footer.php');
        ?>    
    </body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</html>