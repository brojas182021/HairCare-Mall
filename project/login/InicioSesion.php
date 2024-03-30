<html>
    <body>
        <?php
        include('../shared/head.php');
        include('../shared/navbar.php');
        ?>

        <style>
            .marmol{background-image:url('./assets/marmol.jpg');}
            .imagen-centrada {
                display: block;
                width: 100%; 
                max-width:400px;
                height: auto;
                margin: 4rem auto;
            }
        </style>

        <section class="vh-100 marmol" style="background-color:beige">
        <div class="container py-5 h-100">
            <div class="row justify-content-between align-items-center h-90"  style="background-color:#ffffff; border-radius:1rem; box-sizing:border-box;"> <!-- Agrega la clase 'row' y las clases 'justify-content-center align-items-center' para alinear los elementos en fila -->
                <div class="col-md-8 col-lg-7 col-xl-6 h-100 logo-bg" style="background-color:#d1b885; border-bottom-left-radius: 1rem;">
                    <img src="./assets/bg_logo.png" class="img-fluid imagen-centrada" alt="Login image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 pt-5">
                <form method="post" action="./login.php">
                <?php
                include('../shared/conexion.php');
                $con = conectar();
                ?>
                <b><h5 class="mb-3 pb-4 fs-3" style="letter-spacing: 1px;">Ingresa tus datos</h5></b>
                <div class="form-outline mb-4">
                    <label class="form-label" for="usuario">Correo</label>
                    <input type="email" id="usuario" placeholder="Ingresa tu correo" class="form-control form-control-lg" name="usuario" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Contraseña</label>
                    <input type="password" placeholder="Ingresa tu contraseña" id="password" name="password" class="form-control form-control-lg" />
                </div>
                <input type="submit" class="btn btn-primary btn-md" name="btningresar" value="Ingresar">
                </form>
                </div>
            </div>
        </div>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>