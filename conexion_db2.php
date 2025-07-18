<?php
//parametro de configuracion de conexiom borrame
// difinir argumentos de conexion borrame
$host = "localhost";
$user = "root"; 
$contrasena = ""; 
$charset = "utf8mb4";

// nombrar la base de datos

$db = "borrame";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opciones = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];
$pdo = new PDO($dsn, $user, $contrasena, $opciones);
echo "Conexión establecida";