<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="view/css/main2.css" />
    <link rel="stylesheet" href="view/css/normalize.css" />
    <title>Login</title>
  </head>
  <body >
    <main class="login-design">
      <div class="waves">
        <img src="view/image/loginPerson.png" alt="" />
      </div>
      <div class="login">
        <div class="login-data">
          <img src="view/image/collab.png" alt="" />
          <h1>Inicio de Sesión</h1>
      <div class="login-form">
          <form method="post" action="controller/evaluar.php" >
            <div class="input-group">
              <label class="input-fill">
                <input type="text" name="user" id="user" required />
                <span class="input-label">Usuario</span>
                <i class="fas fa-power-off"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
                <input type="password" name="pass" id="pass" required />
                <span class="input-label">Contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
            <a href="view/Registrarse.php">¿Registro Ususario?</a>
            <a href="#">¿Olvido la contraseña?</a>
            <div></div>
            <input type="submit" value="Iniciar Sesión" class="btn-login" />
          </form>
        </div>
      </div>
      </div>
    </main>
  </body>
</html>