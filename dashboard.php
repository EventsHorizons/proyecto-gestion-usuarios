<?php


session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert ("Ups! Debes iniciar sesión");
    window.location = "../index.php";
    </script>
    ';
    session_destroy();
    die();
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>

<div class="contenedor">         
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
    <a href="php/salir.php">Cerrar sesión</a>
</div>

</body>
</html>

