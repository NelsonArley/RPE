
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
<body style="background-color:#F5F5F5">
<div class="container">
            <div class="container">
				<div class="row">
            <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Registro de Producto </font></i></b></h2></span>
                
            </div>
				<div class="row">
				</div>
				</div> 


                <form action="../controller/inventarioC.php" method="post">
                     <!-- Codigo input -->
                     <div class="form-outline mt-4 mb-4">
                        <input type="text" id="tipo_producto" name="nombre_pro" class="form-control" required/>
                        <label class="form-label" for="form7Example1">nombre del producto  </label>
                      </div>


                    <label class="form-label" for="form7Example2"> Fecha de vencimiento </label>
                    <div class="form-outline mb-4">
                        <input type="date" id="orden_venta" name="fecha_ven" class="form-control" required/>
                    </div>


                    <label class="form-label" for="form7Example2"> Fecha de Expedicion</label>
                    <div class="form-outline mb-4">
                        <input type="date" id="cantidad" name="Fecha_Expedicion" class="form-control" required/>
                    </div>


                    <label class="form-label" for="form7Example2"> Lote del producto   </label>
                    <div class="form-outline mb-4">
                        <input type="date" id="cantidad" name="lote" class="form-control" required/>
                    </div>

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="number" id="precio_producto" name="precio_venta" class="form-control" required/>
                        <label class="form-label" for="form7Example1"> Precio del producto  </label>
                    </div>


                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="text" id="tipo_producto" name="codigo_referencia" class="form-control" required/>
                        <label class="form-label" for="form7Example1"> Codigo de referencia  </label>
                    </div>


                    
                    <div class="form-outline mb-4">
                        <input type="text" id="cantidad" name="tipo_producto" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Tipo de producto</label>
                    </div>

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="number" id="cantidad" name="cantidad_producto" class="form-control" required/>
                        <label class="form-label" for="form7Example1">cantidad del producto  </label>
                    </div>

                    
 
                    <button id="registro" type="submit" name="enviar"  class="btn btn-secondary btn-rounded">Registrar</button>
                </form>
            </div>
            <br>
            <div class="container-fluid mt-2">
            <div class="table-responsive">
                <table class="table table-secondary table-hover">
    <thead>
         <tr>
            <th scope="col"><i class="fas fa-cog"></i> Nombre de producto </th>
            <th scope="col"> Fecha de vencimiento </th>
            <th scope="col"> Fecha de expedicion  </th>
            <th scope="col"> Lote de producto </th>
            <th scope="col"> Precio de producto </th>
            <th scope="col"> Codigo de referencia </th>
            <th scope="col"> tipo de producto </th>
            <th scope="col"> Cantidad de producto </th>
            <th scope="col"> Orden de producto </th>
            <th scope="col"> Editar </th>
            <th scope="col"> Eliminar </th>
</tr>
</thead>
    <tbody>
            <?php
            $obj = new inventario();
            $datos = $obj->listarInventario();

            foreach ($datos as $key) 
            {
                ?>

                <tr>

                    <td><?php echo $key['Id_Producto']?></td>
                    <td><?php echo $key['NomProducto']?></td>
                    <td><?php echo $key['FechaVencimineto']?></td>
                    <td><?php echo $key['FechaExpedicion']?></td>
                    <td><?php echo $key['LoteProducto']?></td>
                    <td><?php echo $key['PrecioProducto']?></td>
                    <td><?php echo $key['codigo_referencia_producto']?></td>
                    <td><?php echo $key['tipo_producto']?></td>
                    <td><?php echo $key['cantidad_producto']?></td>
                    <td><a href="FeditarInventario.php?id=<?php echo $key['Id_Producto']?>" class="btn btn-warning">Actualizar</a></td>
                    <td><a href="../controller/EliminarInventario.php?id=<?php echo $key['Id_Producto']?> " class="btn btn-warning">Eliminar</a></td>


                </tr>

            <?php } ?>

        </tbody>
        
		<!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
        ></script>
</body>
</html>