<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";
require_once "../model/Factura.php";

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

        
        <title> Registro Factura</title>
    </head>
    <header>
    <?php
include("nav_admin.php");
?>
    </header>

<?php 

$objeto = new Conectar();
$ide = $_GET['id'];
$consulta = "SELECT * FROM factura where id_factura = '$ide'";
$busca = mysqli_query($objeto->_bd,$consulta);
$fila = mysqli_fetch_row($busca);



 ?>


<body style="background-color:#F5F5F5">
<div class="container">
            <div class="container">
				<div class="row">
            <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Actualizar Facturas </font></i></b></h2></span>
                
            </div>
				<div class="row">
				</div>
				</div>               
                <form action="../controller/EditarFactura.php" method="post">


                <div class="SpaceTwo">
                <div class="group">
                    <input type="text" name="facturaid"  class="form-control" value="<?php echo $ide; ?>" required="required"/>
                </div>
                </div>
                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="text" name="Nom_producto" id="name" value="<?php echo $fila[1] ?>" class="form-control" required="required"/>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="text" id="detalle_producto" name="precio_producto" value="<?php echo $fila[2] ?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2"></label>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="text" id="num_fac" name="tipo_producto" value="<?php echo $fila[3] ?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2"></label>
                    </div>
                    <button class="botons" name="actualizarfactura" type="submit">Actualizar</button>               
                </form>
            </div>