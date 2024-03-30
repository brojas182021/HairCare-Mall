<!DOCTYPE html>
<html lang="en">
    <?php
    include('./shared/head.php');
    
    ?>
    <body>
       
        <!-- Responsive navbar-->
       <?php
       include('./shared/navbar.php');
        ?>
        <!-- Header-->
        <style>

            .tijeras{
                background-color:#EEEEEE;
            }
            .btn-shop:hover,
            .btn-shop:active {
                background-color: #A28751 !important;
                border-color: #A28751;
            }
        </style>
        <header class=" py-5 tijeras"  >
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder fs-2 text-black mb-5 pt-5">Productos para tu look único o para impulsar tu negocio</h1>
                            
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-shop bg-primary text-white btn-md px-4 me-sm-3" href="#features">Comprar</a>
                                <a class="btn btn-light btn-md px-4" href="#!">¡Quiero saber más!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Maquina para caballero</h2>
                        <p>Maquina para hacer corte a caballero</p>
                        <a class="text-decoration-none" href="catalogo.php">
                            Ver más
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Cintas para peinados</h2>
                        <p>Cinta para hacer de los peinados algo mucho más atractivo .</p>
                        <a class="text-decoration-none" href="catalogo.php">
                            Ver más
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Tijeras</h2>
                        <p>Tijeras para el corte de cabello .</p>
                        <a class="text-decoration-none" href="catalogo.php">
                            Ver más
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <?php
        include('./shared/footer.php');
        ?>
    </body>
</html>
