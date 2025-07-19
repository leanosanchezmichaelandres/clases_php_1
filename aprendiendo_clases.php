<?php
class Animal {

    // Atributos
    public $nombre = "Peludito";
    public $genero;
    public $especie;
    public $edad;
    public $terreno = "tierra";

    // Métodos
    public function saludar()
    {
        echo "Mi nombre es " . $this->nombre;
        echo "Tengo ". $this->edad . " años";
    }

    function imprimir_terreno()
    {
       echo  "<br> terreno: ". $this->terreno;
    }
}

function saludar($nombre)
{
    echo "Hola " . $nombre;
}

// Ingredientes
// Harina
// Chocolate}
// Azucar
// Agua

// Procesos
// Revolver ingredientes
// Cocinar mezcla
// Vertir mezcla

/* FUNCION */
/* function saludar_michael()  
{
    echo "Hola Michael";
}

saludar_michael(); */


$leon = new Animal();
$leon->nombre = "Rey Michael";

// Llamar método saludar()
/* $leon->saludar(); */
saludar("Santiago");

$leon->imprimir_terreno();