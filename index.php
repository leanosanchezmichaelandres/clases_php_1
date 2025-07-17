<?php

// Tipos de datos
// numeros
$edad = 42;
$num_decimal = 12.2;

// Texto
$numero_texto = "2";

// Boleanos
$mayor_edad = false;

/* if ($mayor_edad === true) 
{
    echo  "Eres mayor de edad";
}
else 
{
    echo "No eres mayor de edad";
} */

$edad = "23";

// Condicionales
/* if ($edad == 23)
{
    echo "Tienes 23 años";
}
else if ($edad == 17)
{
    echo "Hola profe";
}
else 
{
    echo "No tienes 23 años";
} */


// Loops
// For loop es cuando sabemos cuantas beses queremos repetir una accion
$contador = 5;

/* for ($i = 0; $i < $contador; $i++)
{
    echo $i + 1;
}
 */
// FOREACH Acceder a los items de una lista/array
/* $boleanos = [true, false, true, true, false];

foreach ($boleanos as $boleano) {
    if ($boleano == true)
    {
        echo "valor es verdadero <br>";
    }
    else {
        echo "valor falso <br>";
    }
} */


// Cuando no sabemos cuantas veces debemos repetir una accion
/* $i = 20;
while ($i > 10) {
    $i--;

    echo "i es igual a " . $i . "<br>";
} */

$nombres = ["MICHAEL", "SANTIAGO", "DAVID"]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Clase con el scofi</title>
</head>
<body>
    <h1>Que hubo</h1>
    <ul>
        <?php
        foreach ($nombres as $nombre)
        {
            if ($nombre == "DAVID")
            {
                echo "<li>$nombre</li>";
            }
            else
            {
                echo "<li>$nombre david me cae mal</li>";
            }
        }
        ?>
    </ul>
    
    <form action="formulario_controlador.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
       
            <button name="quehubo" type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>