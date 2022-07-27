<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";
require_once "../model/Venta.php";
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
include("nav_admin.php");
?>
    </header>
<body style="background-color:#F5F5F5">
<div class="container">
            <div class="container">
				<div class="row">
            <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Registro Venta de Producto </font></i></b></h2></span>
                
            </div>
				<div class="row">
				</div>
				</div> 
                <form id="venta" name="venta" method="POST" action="../controller/ventaC.php">

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="text" id="tipo_producto" name="uno" class="form-control" required/>
                        <label class="form-label" for="form7Example1">Tipo de producto </label>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="text" id="orden_venta" name="orden_venta" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Orden de la venta </label>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="text" id="cantidad" name="cantidad" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Cantidad del producto  </label>
                    </div>

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="number" id="precio_venta" name="precio_venta " class="form-control" required/>
                        <label class="form-label" for="form7Example1">Precio total de la venta </label>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="text" id="factura_venta" name="factura_venta" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Numero de la factura de la venta   </label>
                    </div>
                    <button id="registro" name="registro" type="submit"   class="btn btn-secondary btn-rounded">Registrar</button>
                </form>
            </div>
        
            
            <div class="container-fluid mt-2">
            <div class="table-responsive">
                <table class="table table-secondary table-hover">

            <thead>
         <tr>
            <th scope="col"><i class="fas fa-cog"></i> Id venta  </th>
            <th scope="col"> Tipo de producto</th>
            <th scope="col"> Orden de venta  </th>
            <th scope="col"> Cantidad </th>
            <th scope="col"> Precio de venta </th>
            <th scope="col"> Factura de venta  </th>
            <th scope="col"> Editar </th>
            <th scope="col"> Eliminar </th>
</tr>

    <tbody>
            <?php
            $obj = new venta();
            $datos = $obj->listarVenta();

            foreach ($datos as $key) 
            {
                ?>

                <tr>

                    <td><?php echo $key['id_venta']?></td>
                    <td><?php echo $key['tipo_producto']?></td>
                    <td><?php echo $key['orden_venta']?></td>
                    <td><?php echo $key['cantidad']?></td>
                    <td><?php echo $key['precio_venta']?></td>
                    <td><?php echo $key['factura_venta']?></td>
                    <td><a href="FeditarVenta.php?id=<?php echo $key['id_venta']?>" class="btn btn-warning">Actualizar</a></td>
                    <td><a href="../controller/EliminarVenta.php?id=<?php echo $key['id_venta']?>" class="btn btn-warning">Eliminar</a></td>


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