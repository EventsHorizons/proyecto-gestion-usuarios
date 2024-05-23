<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios (nombre, email, usuario, contrasena) 
            VALUES ('$nombre', '$email', '$usuario', '$contrasena')";

$conecta = mysqli_query($conexion, $query);

if ($conecta) {
    echo '
    <script>
    alert ("Registro exitoso");
    window.location = "../index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert ("Ups! Intenta nuevamente");
    window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);

?>