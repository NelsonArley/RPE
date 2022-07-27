<?php
require_once "../config/conexion.php";
require_once "../config/conexionpoo.php";
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

        <link rel="stylesheet" href="styles/main.css" />
        <link rel="stylesheet" href="styles/normalize.css" />
        <title> Actualizacion de datos </title>
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
    <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Actualizacion de datos </font></i></b></h2></span>
        
    </div>
        <div class="row">
        </div>

        <?php 

$objeto = new Conectar();
$ide = $_GET["id"];
$consulta = "SELECT * FROM usuario where id_us = '$ide'";
$busca = mysqli_query($objeto->_bd,$consulta);
$fila = mysqli_fetch_row($busca);



 ?>

        </div>
        <form method="post" action="../controller/ActualizarAdmin.php">

            <select class="form-select mt-4 mb-4" id="fk_pk_tdoc" name="fk_pk_tdoc" aria-label="Default select example">
                        <option selected>Seleccione su documento</option>
                        <option >CC</option>
                        <option >TI</option> 
                    </select>

                    <div class="form-outline mb-4">
                        <input type="text" id="id_us" name="id_us" value="<?php echo $ide; ?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Numero de identificacion</label>
                    </div>

					<select class="form-select mb-4" id="fk_rol" name="fk_rol" aria-label="Default select example">
                        <option selected>Seleccione el rol</option>
                        <option >Administrador</option>
                        <option >Bodeguero</option>
                    </select>

                    <div class="form-outline mb-4">
                        <input type="text" id="usu" name="usu" value="<?php echo $fila [1]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Usuario</label>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="Password" id="pass" name="pass" value="<?php echo $fila [2]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Contraseña</label>
                    </div>

					<div class="form-outline mb-4">
                        <input type="text" id="nom_us" name="nom_us" value="<?php echo $fila [3]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Nombre del usuario</label>
                    </div>

					<div class="form-outline mb-4">
                        <input type="text" id="ape_us" name="ape_us" value="<?php echo $fila [4]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Apellido del usuario</label>
                    </div>

           <div class="form-outline mb-4">
                        <input type="text" id="direccion" name="direccion" value="<?php echo $fila [5]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Direccion del usuario</label>
                    </div>
					
					<div class="form-outline mb-4">
                        <input type="text" id="email" name="email" value="<?php echo $fila [6]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Email</label>
                    </div>

					<div class="form-outline mb-4">
                        <input type="number" id="tel_us" name="tel_us" value="<?php echo $fila [7]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Telefono</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="number" id="estado_us" name="estado_us" value="<?php echo $fila [8]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Estado</label>
                    </div>

					<select class="form-select mb-4" id="fk_pregunta_seg" name="fk_pregunta_seg" aria-label="Default select example">
                        <option selected> Seleccion de pregunta </option>
                        <option >¿Nombre de primera mascota?</option>
						<option >¿Lugar de Nacimiento?</option>
                    </select>
					
					<div class="form-outline mb-4">
                        <input type="text" id="Rest_Pass" name="Rest_Pass" value="<?php echo $fila [9]?>" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Respuesta a pregunta </label>
                    </div>
                    <button id=""  type="submit" name="actuali_admin" class="btn btn-secondary btn-rounded">Actualizar</button>
                </form>
            </div>
        
		<!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
        ></script>
    </body>
</html>