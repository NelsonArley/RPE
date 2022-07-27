<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";
require_once "../model/OrdenProductos.php";
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

        
        <title> Orden de producto</title>
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
            <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Registro Orden Producto </font></i></b></h2></span>
                
            </div>
				<div class="row">
				</div>
				</div> 

                <!--<?php 

                //$objeto = new Conectar();
                //$ide = $_GET['id'];
                //$consulta = "SELECT * FROM orden where  orden_compra = '$ide'";
                //$busca = mysqli_query($objeto->_bd,$consulta);
                //$fila = mysqli_fetch_row($busca);

                ?>-->

                <form action="../controller/OrdenC.php" method="post">
                    

                                         

                    <div class="form-outline mb-4">
                        <input type="text" id="LugarDes" name="LugarDes" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Lugar de destino</label>
                    </div>


                    <div class="form-outline mb-4">
                        <input type="text" id="proveedor"  name="proveedor" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Nombre del proveedor</label>
                    </div>

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="text" id="canti" name="canti" class="form-control" required/>
                        <label class="form-label" for="form7Example2">cantidad del Poducto</label>
                    </div>

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="text"  id="tipo_producto" name="tipo_producto" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Tipo de producto</label>
                    </div>

                    <div class="form-outline mt-4 mb-4">
                        <input type="number" id="ordenCompra" name="ordenCompra" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Orden de Compra</label>
                    </div>


                    <button id="registro" id="" name="registro" type="submit"   class="btn btn-secondary btn-rounded">Registrar</button>
                </form>
            </div>
        
            <br>
            <div class="container-fluid mt-2">
            <div class="table-responsive">
                <table class="table table-secondary table-hover">

            <thead>
         <tr>
            <th scope="col"><i class="fas fa-cog"></i> Id orden  </th>
            <th scope="col"> Lugar de destino </th>
            <th scope="col">  Nombre del proveedor</th>
            <th scope="col"> Cantidad de producto</th>
            <th scope="col"> Tipo de producto </th>
            <th scope="col"> Orden de la compra  </th>
            <th scope="col"> Editar </th>
            <th scope="col"> Eliminar </th>
</tr>

    <tbody>
            <?php
            $obj = new orden();
            $datos = $obj->listarOrdenP();

            foreach ($datos as $key) 
            {
                ?>

                <tr>

                    <td><?php echo $key['id_orden']?></td>
                    <td><?php echo $key['lugar_destino_orden']?></td>
                    <td><?php echo $key['nombre_provedor']?></td>
                    <td><?php echo $key['cantidad_productos']?></td>
                    <td><?php echo $key['tipo_producto']?></td>
                    <td><?php echo $key['orden_compra']?></td>
                    <td><a href="FeditarordenProduc.php?id=<?php echo $key['id_orden']?>" class="btn btn-warning">Actualizar</a></td>
                    <td><a href="#" class="btn btn-warning">Eliminar</a></td>


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