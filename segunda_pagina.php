<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
 Comentarios en PHP
    #
    //
*/

// Variables : reservan un espacio en la computadora, pueden cambiar su valor en tiempo
//             de ejecicion.
//             Tipado Dinámico
//             para concatenar se utiliza el " . "


$nombre = "Rudy";
$edad = "22";

print "Su nombre es : " . $nombre;


// en php podemos incluir la variable en un string

print "Su nombre es : $nombre ";

//Con las comillas simples indicamos que imprima literalmente el texto y las variables que le indiquemos

print 'Su nombre es : $nombre ';

/*
 * Funciones "print" y la expresión "echo" nos sirven para imprimir en pantalla
 * */

echo "Tu edad es : ".$edad

?>
</body>
</html>



