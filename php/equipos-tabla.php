<?php

//Crear array asociativo vacío.
$equipos = [];


// Añadir equipos dinámicamiente.
for ($i=0; $i<=1; ++$i) { 
    $equipos[$i]["nombre"] = "Equipo ". ($i+1);
    $equipos[$i]["numJugadores"] = 10+$i;
    $equipos[$i]["posicionEnLaTabla"] = $i+1;
};

    
// Imprimir los equipos dinámicamente en una tabla.

// Primero, imprimir cabecera de la página.

echo ('<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Tabla Equipos</title><link rel="stylesheet" href="../css/styles.css" type="text/css"></head>');

// Segundo, imprimir estructura de tabla y cabeceras.

echo ('<body>');
echo ('<div class="container">');
echo ('<table class="tabla-equipos">');
echo ('<tr class="cabecera-tabla">');
echo ('<th>Nombre</th>');
echo ('<th>Nº Jugadores</th>');
echo ('<th>Posici&oacute;n</th>');
echo ('</tr>');

// Tercero, imprimir los datos con un foreach.

foreach ($equipos as $clave => $valor) {
    echo('<tr>');   
    foreach ($valor as $claveb => $valorb) {
        echo('<td>');
        echo($valorb);
        echo('</td>');
    };
    echo('</tr>');   
};

// Finalmente, se imprime el resto etiquetas de cierre html.

echo('</table></div></body></html>');

?>