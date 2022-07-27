<?php 
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";
require_once "../model/compra.php";

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

        
        <title> Registro Compra</title>
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
            <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Registro Compra</font></i></b></h2></span>
                
            </div>
				<div class="row">
				</div>
				</div>               
                <form action="../controller/compraC.php" method="post">

                    
                    <div class="form-outline mt-4 mb-4">
                        <input type="text" name="Orden_compra" class="form-control" required/>
                        <label class="form-label" for="form7Example1">Orden de Compra</label>
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
            <th scope="col"> Tipo de producto</th>
            <th scope="col"> Detalle de producto  </th>
            <th scope="col"> N de factura </th>
            <th scope="col"> Editar </th>
            <th scope="col"> Eliminar </th>
</tr>
</thead>
		<!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
        ></script>
</body>
</html>