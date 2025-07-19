<?php
// Importar es traer el contenido de otros documentos

// Importar pdo
require_once "conexion_db.php";
$pdo = conectar();

// Ejecución de select
/* $nombres = "Luis";
$telefono = "5551234567";
$stmt = $pdo->prepare("SELECT * FROM usuario WHERE nombres = ? AND telefono = ?;");
$stmt->execute([$nombres, $telefono]);
$fila = $stmt->fetch();
echo $fila["email"]; */

// Ejecución de INSERT

/* Insertar valores de michael en la tabla usuario. 
+ Guardar los valores en variables. 
+ Preprar y ejecutar la consulta */

// Declarar variables
/* $doc = 1005813830;
$nombres = "MICHAEL";
$apellidos = "leano";
$telefono = "123456";
$email = "michael@gmail.com";
$id_rol = 2;

$stmt = $pdo ->prepare("INSERT INTO usuario(doc, nombres, apellidos, telefono, email, id_rol) 
                        VALUES(?, ?, ?, ?, ?, ?);");
$exito = $stmt->execute([$doc, $nombres, $apellidos, $telefono, $email, $id_rol]);

if ($exito == true)
{
    $filas_afectadas = $stmt->rowCount();
    echo "Registro insertado. " . $filas_afectadas . " filas afectadas.";
} */

// Update
/* Actualizar el nombre del usuario con el documento 1005813830.
+ Su nuevo nombre será David*/
/* $doc = 1005813830;
$nombres = "DAVID";
$apellidos ="COVALEDA";
$stmt = $pdo->prepare("UPDATE usuario SET nombres = ?, apellidos = ? WHERE doc = ?;");
$exito = $stmt->execute([$nombres, $apellidos, $doc]);

if ($exito==true)
{
    echo "ACTUALIZADO";
} */

// Delete
/* Borrar el registro con el documento  1005813830 */ 
$doc = 1005813830;
$stmt = $pdo->prepare("DELETE FROM usuario WHERE doc = ?");
$stmt->execute([$doc]);