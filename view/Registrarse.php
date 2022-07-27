<?php
	///include'login/seguridad2.php' ;
	require_once '../config/database.php';
	$db = database::conectar();
	
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
        <title> Registro usuario</title>
    </head>

<header>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c7adf0;">
  <!-- Container wrapper -->
  <div class="container">
                    <!-- Navbar brand -->
                    <a class="navbar-brand me-2" href="#">
                        <img
                            src=""
                            height="16"
                            alt=""
                            loading="lazy"
                            style="margin-top: -1px;"
                            />
                    </a>

                    <!-- Toggle button -->
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarButtonsExample"
                        aria-controls="navbarButtonsExample"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarButtonsExample">
                        <!-- Left links -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                        
                        <div class="d-flex align-items-center">
                            <a href="../login.php">
                                <button type="button" class="btn btn-secondary btn-rounded">
                                    <i class="fas fa-book-reader"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
<header>
<body style="background-color:#F5F5F5">
	
            <div class="container">
            <div class="container">
				<div class="row">
            <span class="d-block mt-5 p-2  text-dark text-center" style="background-color:#c7adf0 ;" ><h2><b><i> <font style="color:#2e0f5e;">Registro Nuevo </font></i></b></h2></span>
                
            </div>
				<div class="row">
				</div>
				</div>
                
                
            <form id="registro" name="registro" method="POST" action="../view/registro.php">

            <select class="form-select mt-4 mb-4" id="fk_pk_tdoc" name="fk_pk_tdoc" aria-label="Default select example">
                        <option selected>Seleccione su documento</option>
                        <option >CC</option>
                        <option >TI</option> 
                    </select>

                    <div class="form-outline mb-4">
                        <input type="text" id="id_us" name="id_us" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Numero de identificacion</label>
                    </div>

					<select class="form-select mb-4" id="fk_rol" name="fk_rol" aria-label="Default select example">
                        <option selected>Seleccione el rol</option>
                        <option >Administrador</option>
                        <option >Bodeguero</option>
                    </select>

                    <div class="form-outline mb-4">
                        <input type="text" id="nombre_usu" name="nombre_usu" class="form-control" required/>
                        <label class="form-label" for="form7Example2">Nombre del usuario</label>
                    </div>

                    
                    <div class="form-outline mb-4">
                        <input type="text" id="ape_usu" name="ape_usu" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Apellido del usuario</label>
                    </div>

					<div class="form-outline mb-4">
                        <input type="text" id="tel_us" name="tel_us" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Telefono del usuario</label>
                    </div>

					<div class="form-outline mb-4">
                        <input type="text" id="dir_us" name="dir_us" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Direccion del usuario</label>
                    </div>

           <div class="form-outline mb-4">
                        <input type="text" id="Email" name="Email" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Email del usuario</label>
                    </div>
					
					<div class="form-outline mb-4">
                        <input type="text" id="username" name="username" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> usuario</label>
                    </div>

					<div class="form-outline mb-4">
                        <input type="Password" id="Password" name="Password" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Contraseña</label>
                    </div>

					<select class="form-select mb-4" id="fk_pregunta_seg" name="fk_pregunta_seg" aria-label="Default select example">
                        <option selected> Seleccion de pregunta </option>
                        <option >¿Nombre de primera mascota?</option>
						<option >¿Lugar de Nacimiento?</option>
                    </select>
					
					<div class="form-outline mb-4">
                        <input type="text" id="Rest_Pass" name="Rest_Pass" class="form-control" required/>
                        <label class="form-label" for="form7Example2"> Respuesta a pregunta </label>
                    </div>
                    <button id="registro" name="registro" type="submit" name="enviar"  class="btn btn-secondary btn-rounded">Registrar</button>
                </form>
            </div>
        
		<!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
        ></script>
    </body>
</html>