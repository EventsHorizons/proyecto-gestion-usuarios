<?php

session_start();

if(isset($_SESSION['usuario'])){
  header("location: dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <!-- Fuente de Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>
  <body>
    <main>
      <div class="contenedor_todo">
        <!-- Sección trasera que contiene las opciones de login y registro -->
        <div class="caja_trasera">
          <!-- Opción para iniciar sesión -->
          <div class="caja_trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button id="btn_iniciar-sesion">Iniciar Sesión</button>
          </div>
          <!-- Opción para registrarse -->
          <div class="caja_trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Regístrate para que puedas iniciar sesión</p>
            <button id="btn_registrarse">Regístrarse</button>
          </div>
        </div>

        <!-- Contenedor para los formularios de login y registro -->
        <div class="contenedor_login-register">
          <!-- Formulario de inicio de sesión -->
          <form action="php/login.php" method="POST" class="formulario_login">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo Electrónico" name="email" />
            <input type="password" placeholder="Contraseña" name="contrasena" />
            <button>Entrar</button>
          </form>

          <!-- Formulario de registro -->
          <form action="php/registro.php" method="POST" class="formulario_register">
            <h2>Registrate</h2>
            <input type="text" placeholder="Nombre completo" name="nombre" />
            <input type="text" placeholder="Correo Electrónico" name="email" />
            <input type="text" placeholder="Usuario" name="usuario" />
            <input type="password" placeholder="Contraseña" name="contrasena" />
            <button>Regístrarse</button>
          </form>
        </div>
      </div>
    </main>

    <!-- Enlace al archivo JavaScript -->
    <script src="assets/js/script.js"></script>
  </body>
</html>
