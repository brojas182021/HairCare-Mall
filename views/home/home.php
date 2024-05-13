<!DOCTYPE html>
<html lang="en">
    <?php
    require_once 'views/shared/head.php';
    
    ?>
    <body>
       
        <!-- Responsive navbar-->
       <?php
       require_once 'views/shared/navbar.php';
        ?>
        <!-- Header-->
        <style>

                .banners-container{
                    margin: 5rem auto;
                    background-color:#EEEEEE;
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    width: 100%;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                }

                .btn-shop:hover,
                .btn-shop:active {
                background-color: #A28751 !important;
                border-color: #A28751;
                }
                .slick-dots{
                margin-bottom:0px !important;
                position: absolute !important;
                bottom: 14px !important;
                }

                .slick-dotted.slick-slider{
                margin-bottom:0px !important;
                }

                .slick-next{
                    right: 5%;
                }

                .slick-prev{
                    left:5%;
                    z-index: 999;
                }

                .item-banner{
                    height:100vh;
                    max-height:245px;
                    position:relative;
                }

                .item-banner .banner_info{
                    margin: 0 auto;
                    padding:12px;
                    width: 60%;
                    max-width:270px;
                    position: absolute;
                    top:30%;
                    left:0;
                    right:0;
                    text-align:center;
                    color:white;
                    background-color:#000;
                    border-radius:8px;
                    font-size:12px;
                }

                .banner_info .title{
            margin-bottom:7px;
            font-size:16px;
            font-weight:bold;
        }
                .item-banner img{
                    width: 100%;
                    height:auto;
                }

                .slick-dots li button {
          color: #ffffff; /* Color blanco */
        }

        .slick-dots li button:before{
            color:white;
        }
        /* Aumenta el tamaño de los puntos */
        .slick-dots li button::before {
          font-size: 10px; /* Tamaño de fuente personalizado */
        }
        .slick-dots li.slick-active button:before{
            color:white;
        }
        .banner {
          margin:0 auto;
          max-width:920px;
          padding:1rem ;
          height: 100px;
          display: flex;
          justify-content: flex-start;
          align-items: center;
          font-size: 3vw;
          background-size: cover;
          background-position: 60% 100%;
          border-radius:10px;
          box-shadow: 0 7px 11px 0 rgb(0 0 0 / 10%), 0 4px 6px 0 rgb(0 0 0 / 10%);
        }
        .gestionar-productos{ 
          background-image: url(/haircare-mall/public/assets/slide1.png);
          color: #FF9A76;
          background-position: 22% 100%;
        }
        .gestionar-productos a {
            color:white;
            background-color:#FF9A76;
        }

        .revisar-catalogo {
            justify-content: flex-end;
            padding: 1rem;
            background-image: url(/haircare-mall/public/assets/slide2.png);
          color: #679B9B; /* Color del banner "Revisar catálogo" */
        }
        .revisar-catalogo a {
            color:white;
            background-color:#679B9B;
        }
        .content-banner{
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          font-size:14px;
        }
        .content-banner p{
            margin-bottom:0.5rem;
        }
        .boton-enlace {
          display: inline-block;
          padding: 10px 20px;
          background-color: #fff;
          color: #007bff; /* Color del botón de enlace "Gestionar productos" */
          text-decoration: none;
          border-radius: 5px;
          font-size:12px;
          transition: background-color 0.3s;
        }
        .boton-enlace:hover {
          background-color: #f0f0f0; /* Color de fondo del botón al pasar el ratón */
        }

        @media (min-width:768px){
            .banners-container{
                margin: 5rem auto;
            }
            .item-banner{
                max-height:520px;
            }
            .item-banner img{
                object-fit:scale-down;
            }
            .slick-dots li button::before {
                font-size: 15px; /* Tamaño de fuente personalizado */
            }
            .slick-next:before, .slick-prev:before{
                font-size:31px;
            }
            .banner {
                padding:1rem 3rem;
                height: 286px;
                font-size:1.5vw;
            }
            .content-banner{
                font-size:28px;
                gap: 12px;
            }
            .content-banner p{
                margin-bottom:1rem;
            }
            .boton-enlace {
                font-size:18px;
            }
            .gestionar-productos{ 
                background-position: 42% 100%;
            }
            .revisar-catalogo {
            padding: 1rem 7rem;
            }
            .item-banner .banner_info{
                padding:3rem 2rem;
                max-width: 500px;
                top: 30%;
                font-size: 20px;
            }

            .banner_info .title{
                font-size:28px;
                margin-bottom:1rem;
            }
        </style>
         <div class="banners-container">
              <!-- Segundo banner -->
              <div class="item-banner">
              <img src="<?php echo constant('URL')?>/public/assets/banner3.jpg" alt="">
                <div class="item">
                    <div class="banner_info">
                        <p class="title">Gestión de inventario</p>
                        <p>Administra tu inventario al instante con actualizaciones en tiempo real</p>
                    </div>
                </div>
              </div>
              <!-- Tercer banner -->
              <div class="item-banner">
                <div class="item">
                    <img src="<?php echo constant('URL')?>/public/assets/banner2.jpg" alt="">
                <div class="banner_info">
                <p class="title">Consulta eficiente</p>
                  <p>Consulta tu stock de manera eficaz y sin complicaciones</p>
                    </div>
                </div>
              </div>
        </div>
        <div class="container">
            <div class="row g-5 mb-5 mt-3 flex-column align-items-center">
              <!-- Primer banner: Gestionar productos -->
              <div class="col">
                <div class="banner gestionar-productos">
                <div class="content-banner">
                        <p><b>Administrar productos</b></p>
                        <a href="/haircare-mall/inicioSesion" class="boton-enlace">Ir al sitio</a>
                    </div>
                </div>
              </div>
              <!-- Segundo banner: Revisar catálogo -->
              <div class="col">
                <div class="banner revisar-catalogo">
                  <div class="content-banner">
                    <p><b>Revisar catálogo</b></p>
                    <a href="/haircare-mall/catalogo" class="boton-enlace">Ver productos</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <?php
        require_once 'views/shared/footer.php';
        ?>
         <script src="<?php echo constant('URL')?>views/home/js/home.js"> </script>
    </body>
</html>
