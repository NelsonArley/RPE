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
<body style="background-color:#F5F5F5">
<div class="container">
            <div class="container">
				<div class="row">
            <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Registro Facturas </font></i></b></h2></span>
                
            </div>
				<div class="row">
				</div>
				</div>               
                <form action="../controller/FacturasC.php" method="post">

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="text" name="Nom_producto" class="form-control" required/>
                        <label class="form-label" for="form7Example1">Nombre del Producto</label>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="text" id="detalle_producto" name="precio_producto" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Precio del Producto</label>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="text" id="num_fac" name="tipo_producto" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Tipo Del Producto</label>
                    </div>
                    <button id="registro" name="registrarfactura" type="boton" name="enviar"  class="btn btn-secondary btn-rounded">Registrar</button>                
                </form>
            </div>
        
            
            <div class="container-fluid mt-2">
            <div class="table-responsive">


                <table class="table table-secondary table-hover">

            <thead>
         <tr>
            <th scope="col"><i class="fas fa-cog"></i> Id factura  </th>
            <th scope="col"> Nombre del producto</th>
            <th scope="col"> Precio Del Producto  </th>
            <th scope="col"> Tipo Producto </th>
            <th scope="col"> Editar </th>
            <th scope="col"> Eliminar </th>
        </tr>

        <tbody>
            <?php
            $obj = new facturasuwu();
            $datos = $obj->listarFacturas();

            foreach ($datos as $key) 
            {
                ?>

                <tr>

                    <td><?php echo $key['id_factura']?></td>
                    <td><?php echo $key['nombre_producto']?></td>
                    <td><?php echo $key['precio_producto']?></td>
                    <td><?php echo $key['tipo_producto']?></td>
                    <td><a href="FeditarFactura.php?id=<?php echo $key['id_factura']?>" class="btn btn-warning">Actualizar</a></td>
                    <td><a href="../controller/EliminarFactura.php?id=<?php echo $key['id_factura']?>" class="btn btn-warning">Eliminar</a></td>


                </tr>

            <?php } ?>

        </tbody>
</thead>
		<!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
        ></script>
</body>
</html>