
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
            .modal-agregar-container{
            display:none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 999;
            }
            .card {    
            width: 90%;
            margin: 6rem auto;
            display:flex;
            justify-content:center;
            align-items:center;
            border: none;
            position: relative;
            }
            .card-body {
            width: 90%;
            padding: 40px 10px 20px;
            }
            .card-body .form-control{
            width:100%;
            }
            .boton-agrega {
            position: fixed;
            bottom: 10%;
            right: 5%;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: #ffffff;
            border: none;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            /* line-height: 20px; */
            z-index: 99;
            }
            .boton-agrega::before {
            position: relative;
            top:-6%;
            content:'+';
            }
            .modal-agregar-container.active{
            display:block;
            }
            .close-modal{
            position: absolute;
            top: 5px;
            right: 4%;
            font-size: 25px;
            cursor:pointer;
            }
            .container.table{
                width: 95%;
                overflow:scroll;
            }

            @media (min-width:768px){
                .card {    
                margin: 6rem auto;
                width: 80%;
                max-width:440px;
                }
                .card-body .form-control{
                width:100%;
                }  
                .container.table{
                overflow: auto;
                }
            }
        </style>

            <div class="container table" style="margin-top:10rem;">
                <div class="row justify-content-start px-2"> 
                    <table class="table" >
                        <thead class="table-success table-striped" style="color:white;">
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Descripcion</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php 
                                    include_once 'models/Product.php';
                                    
                                    foreach($this->productos as $row){
                                        $producto = new Product();
                                        $producto = $row;
                                ?>
                                        <tr>
                                            <th><?php echo $producto->prod_codigo?></th>
                                            <th><?php echo $producto->prod_nombre?></th>
                                            <th>$<?php echo number_format($producto->prod_precio, 0, ',', '.')?></th>
                                            <th><?php echo $producto->prod_stock?></th>
                                            <th><?php echo $producto->prod_descrip?></th>    
                                            <th><a href="<?php echo constant('URL')?>crud/verProducto/<?php echo $producto->prod_codigo?>" class="btn btn-info">Editar</a></th>
                                            <th><a href="<?php echo constant('URL')?>crud/deleteProd/<?php echo $producto->prod_codigo?>" class="btn btn-danger">Eliminar</a></th>                                        
                                        </tr
                                    <?php 
                                        }
                                    ?>
                            </tbody>
                    </table>
                </div>  
            </div>
            
            <!--Modal agregar registro-->
            <div class="modal-agregar-container" id="modalInsertar">
                <div class="card box" style="">
                <span class="close-modal">x</span>
                    <div class="card-body">
                    <center> <h4 style="margin-bottom:30px;">Nuevo producto</h4></center>
                        <form action="<?php echo constant('URL')?>crud/insertProd" method="POST">
                            <input type="number" class="form-control mb-3" name="prod_codigo" placeholder="Id" required>
                            <input type="text" class="form-control mb-3" name="prod_nombre" placeholder="Nombre" required>
                            <input type="number" class="form-control mb-3" name="prod_precioVenta" placeholder="Precio" required>
                            <input type="number" class="form-control mb-3" name="prod_Stock" placeholder="Stock" required>
                            <input type="text" class="form-control mb-3" name="prod_descripcion" placeholder="Descripcion" required>
                           <center> <input type="submit" class="btn btn-primary" value="Agregar"></center>
                        </form>
                    </div>
                </div>   
            </div>

            <!-- Boton del modal-->
            <button type="button" class="btn btn-primary boton-agrega" data-bs-toggle="modal" data-bs-target="#modalInsertar">
            </button>
    </body>

    <script src="<?php echo constant('URL')?>views/crud/js/crud.js"></script>
</html>