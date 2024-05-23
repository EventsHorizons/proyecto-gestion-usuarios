<?php

// Conexión a la base de datos MySQL
$conexion = new mysqli("localhost", "tu_usuario", "tu_contraseña", "tu_base_de_datos");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Crear tabla usuarios si no existe
$crear_tabla = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    email VARCHAR(100),
    contrasena VARCHAR(255)
)";

if ($conexion->query($crear_tabla) === TRUE) {
    echo "Tabla usuarios creada correctamente<br>";
} else {
    echo "Error al crear la tabla: " . $conexion->error . "<br>";
}

// Insertar registros de ejemplo
$insertar_registros = "INSERT INTO usuarios (nombre, email, contrasena) 
                        VALUES 
                        ('Andres', 'andres@example.com', 'contraseña1'),
                        ('Kelly', 'kelly@example.com', 'contraseña2'),
                        ('Daniel', 'Daniel@example.com', 'contraseña3')";

if ($conexion->query($insertar_registros) === TRUE) {
    echo "Registros insertados correctamente<br>";
} else {
    echo "Error al insertar registros: " . $conexion->error . "<br>";
}

// Función para obtener el nombre de un usuario por su email
function obtenerNombrePorEmail($email, $conexion) {
    $consulta = "SELECT nombre FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($consulta);
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return $fila['nombre'];
    } else {
        return "Usuario no encontrado";
    }
}

// Función para actualizar la contraseña de un usuario por su nombre
function actualizarContrasenaPorNombre($nombre, $nueva_contrasena, $conexion) {
    $actualizar = "UPDATE usuarios SET contrasena = '$nueva_contrasena' WHERE nombre = '$nombre'";
    if ($conexion->query($actualizar) === TRUE) {
        return "Contraseña actualizada correctamente";
    } else {
        return "Error al actualizar la contraseña: " . $conexion->error;
    }
}

// Ejemplo de uso de las funciones
echo obtenerNombrePorEmail('andres@example.com', $conexion) . "<br>";
echo actualizarContrasenaPorNombre('Andres', 'nueva_contraseña', $conexion) . "<br>";

// Cierra la conexión
$conexion->close();

?>
