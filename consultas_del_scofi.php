<?php
// importar los datos de carlos 

// importar conexion pdo

require_once "conexion_db.php";
$pdo = conectar();

// preparar consulta

$doc = 1003;

$stmt = $pdo->prepare("SELECT telefono FROM usuario WHERE doc = ?;");
$stmt->execute([$doc]);
$fila = $stmt ->fetch();

echo $fila["telefono"];