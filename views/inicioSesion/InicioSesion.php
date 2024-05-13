<!DOCTYPE html>
<html lang="es">
    <body>

        <?php
        // Incluir archivos PHP para encabezado y barra de navegación
        require_once 'views/shared/head.php';
        require_once 'views/shared/navbar.php';
        ?>

        <section class="vh-100 marmol" style="background-color:#fafafa">
            <div class="container py-5 h-100">
                <div class="row justify-content-between align-items-center h-90"  style="background-color:#ffffff; border-radius:1rem; box-sizing:border-box;">
                    <div class="col-md-8 col-lg-7 col-xl-6 h-100 logo-bg d-flex" style="background-color:#637373; border-bottom-left-radius: 1rem;">
                        <img src="<?php constant('URL');?>public/assets/bg_logo.png" class="img-fluid imagen-centrada" alt="Login image" style="margin: 0 auto;">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 pt-5 pb-5">
                        
                        <form action="<?php constant('URL');?>inicioSesion/consultarUsuario" method="post">
                            <b><h5 class="mb-3 pb-4 fs-3" style="letter-spacing: 1px;">Inicia sesión</h5></b>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="usuario">Correo</label>
                                <input type="email" id="usuario" placeholder="Ingresa tu correo" class="form-control form-control-lg" name="usuario" required/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Contraseña</label>
                                <input type="password" placeholder="Ingresa tu contraseña" id="password" name="password" class="form-control form-control-lg" required />
                            </div>
                            <button class="btn btn-primary btn-md">Ingresar </button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
    </body>
</html>
