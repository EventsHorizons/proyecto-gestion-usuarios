<?php

session_start();

include 'conexion.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
//$contrasena = hash('sha512', $contrasena);

$validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email ='$email' AND contrasena = '$contrasena'");

if(mysqli_num_rows($validar) > 0) {
    $_SESSION['usuario'] = $email;
    header("location: ../dashboard.php");
    exit;
} else {
    echo '
    <script>
    alert ("Ups! Intenta nuevamente");
    window.location = "../index.php";
    </script>
    ';
    exit;
}

?>