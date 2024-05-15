<!DOCTYPE html>
<html lang="es">
    <body style="background-color:#fafafa">

        <?php
        // Incluir archivos PHP para encabezado y barra de navegación
        require_once 'views/shared/head.php';
        require_once 'views/shared/navbar.php';
        ?>

        <style>
            .form-login{
                padding:2rem;
                margin: 5rem auto 4rem; 
                width:90%; 
                max-width:800px;
                display:flex;
                flex-direction:column; 
                border-radius:16px; 
                box-shadow: 0 7px 11px 0 rgb(0 0 0 / 10%), 0 4px 6px 0 rgb(0 0 0 / 10%);
                background-color:#fff;
            }
            .img-fluid{
                display:block;
                margin: 0 auto;
                padding:20px 40px;
                width: 90%;
                max-width:350px;
            }
            .form-login form{
                margin: 0 auto;
                width: 85%;
            }
            @media(min-width:768px){
                .form-login{
                    padding:3rem;
                    display:grid;
                    grid-template-columns:40% 52%;
                    justify-content:center;
                    align-items:center;
                    gap:8%;
                }
                .img-fluid{
                    padding:0;
                }
            }
        </style>

        <section>
            <div class="container py-5">
                <div class="form-login h-90">
                    <div class="img-content">
                        <img src="<?php constant('URL');?>public/assets/iniciar-sesion.png" class="img-fluid" alt="Login image">
                    </div>
                    <div class="">            
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
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script> 
    </body>
</html>
