<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";
require_once "../model/inventario.php";
 ?>

<!DOCTYPE html PUBLIC>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

        
        <title> Venta de productos</title>
    </head>
    <header>
    <?php
include("nav_bod.php");
?>
    </header>


<?php 

$objeto = new Conectar();
$ide = $_GET['id'];
$consulta = "SELECT * FROM producto where Id_Producto = '$ide'";
$busca = mysqli_query($objeto->_bd,$consulta);
$fila = mysqli_fetch_row($busca);



 ?>
                

<body style="background-color:#F5F5F5">
<div class="container">
            <div class="container">
                <div class="row">
            <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Actualizar Inventario </font></i></b></h2></span>

            </div>
                <div class="row">
                </div>
                </div>
                <form action="../controller/EditarInventario.php" method="post">
                     <!-- Codigo input -->


                <div class="SpaceTwo">
                <div class="group">
                    <input type="text" name="id_produc" class="form-control" value="<?php echo $ide; ?>" required="required"/>
                </div>
                </div>

                     <div class="form-outline mt-4 mb-4">
                        <input type="text" id="tipo_producto" name="nombre_pro" value="<?php echo $fila[1] ?>" class="form-control" required/>
                        
                      </div>


                    <div class="form-outline mb-4">
                        <input type="date" id="orden_venta" name="fecha_ven" value="<?php echo $fila[2] ?>" class="form-control" required="required"/>
                    </div>


                    
                    <div class="form-outline mb-4">
                        <input type="date" id="cantidad" name="Fecha_Expedicion" value="<?php echo $fila[3] ?>" class="form-control" required="required"/>
                    </div>


                    
                    <div class="form-outline mb-4">
                        <input type="date" id="cantidad" name="lote" value="<?php echo $fila[4] ?>" class="form-control" required="required"/>
                    </div>

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="number" id="precio_producto" name="precio_venta" value="<?php echo $fila[5] ?>" class="form-control" required="required"/>
                        
                    </div>


                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="text" name="codigo_referencia" value="<?php echo $fila[6] ?>" class="form-control" required="required"/>
                        
                    </div>


                    
                    <div class="form-outline mb-4">
                        <input type="text" id="cantidad" name="tipo_producto" value="<?php echo $fila[7] ?>" class="form-control" required="required"/>
                        
                    </div>

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="number" id="cantidad" name="cantidad_producto" value="<?php echo $fila[8] ?>" class="form-control" required="required"/>
                        
                    </div>

                    
 
                    <button class="botons" name="actualizarinventario" type="submit">Actualizar</button>
                </form>
            </div>