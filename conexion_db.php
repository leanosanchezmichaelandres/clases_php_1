<?php
// Parametros de configuración de conexión de db
// Datos que no suelen cambiar
function conectar()
{
    $host = "localhost";
    $user = "root";
    $contrasena = "";
    $charset = "utf8mb4";
    // Nombre de la base de datos
    $db = "conexion_vecinal";
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";




    $opciones = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    $pdo = new PDO($dsn, $user, $contrasena, $opciones);
    return $pdo;
}
