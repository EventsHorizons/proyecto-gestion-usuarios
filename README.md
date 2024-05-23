# Proyecto de Gestión de Usuarios

Este proyecto implementa una aplicación básica de gestión de usuarios con funcionalidades de registro, inicio de sesión y un dashboard protegido. También incluye scripts para interactuar con una base de datos MySQL y realizar tareas automáticas programadas.

## Requisitos

- PHP 7.x o superior
- MySQL 5.x o superior
- Servidor web (Apache, Nginx, etc.)
- Acceso a la línea de comandos del servidor (para tareas programadas)

## Configuración

### Paso 1: Clonar el repositorio

Clona este repositorio en tu servidor local o remoto.

```bash
git clone https://github.com/tu_usuario/proyecto-gestion-usuarios.git
cd proyecto-gestion-usuarios 

Paso 2: Configurar la base de datos

1. Inicia sesión en tu servidor MySQL:

mysql -u tu_usuario -p

2. Crea la base de datos:

CREATE DATABASE login_db;

3. Sal del cliente MySQL:

exit

Paso 3: Configurar la conexión a la base de datos

Edita el archivo php/conexion.php con tus credenciales de MySQL:

<?php

$conexion = mysqli_connect("localhost", "root", "", "login_db");

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>

Paso 4: Crear la tabla y registros de usuarios

Accede al archivo php/setup.php que contiene el script para crear la tabla y añadir registros:

Ejecuta este archivo accediendo a él desde tu navegador: 'http://tu_dominio/php/setup.php'

Paso 5: Ejecutables Directos desde Servidor para Tareas Automáticas Programadas

Para programar una tarea automática en un servidor, necesitarás acceso a la configuración del servidor o a un panel de control como cPanel. Aquí está el ejemplo de cómo podrías programar una tarea para hacer una copia de seguridad de la base de datos a las 12:00 PM todos los días:

1. Abre el panel de control del servidor o cPanel.
2. Busca la sección de "Tareas Cron" o "Cron Jobs".
3. Crea una nueva tarea cron con el siguiente comando:

0 12 \* \* \* mysqldump -u root -p'' login_db > /ruta/donde/guardar/copias_de_seguridad/backup\*$(date +\%Y\%m\%d\%H\%M\%S).sql

Este comando ejecutará mysqldump a las 12:00 PM todos los días para hacer una copia de seguridad de la base de datos y almacenarla en la ruta especificada. Asegúrate de reemplazar tu_usuario, tu_contraseña, tu_base_de_datos y /ruta/donde/guardar/copias_de_seguridad/ con tus propios valores.

Recuerda ajustar la configuración del servidor y los permisos de archivo según sea necesario para que este proceso funcione correctamente.

Paso 6: Probar la aplicación

1. Accede a http://tu_dominio/index.php.
2. Regístrate con un nuevo usuario.
3. Inicia sesión con el usuario registrado.
4. Accede al dashboard.
5. Cierra sesión.

Estructura del Proyecto

- index.php: Página principal con formularios de registro e inicio de sesión.
- dashboard.php: Página de bienvenida para usuarios autenticados.
- php/conexion.php: Script para conectar a la base de datos.
- php/login.php: Script para manejar el inicio de sesión.
- php/registro.php: Script para manejar el registro de nuevos usuarios.
- php/salir.php: Script para manejar el cierre de sesión.
- php/setup.php: Script para crear la tabla y añadir registros de usuarios.
- assets/css/styles.css: Archivo de estilos CSS.
- assets/js/script.js: Archivo JavaScript.

Notas Adicionales

- Asegúrate de tener configurado el servidor web para interpretar archivos PHP.
- Configura los permisos adecuados para las carpetas y archivos de tu servidor.

Autor
Germán Andres Gomez
