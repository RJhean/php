<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 

        // funciones : no se ejecuta hasta que sea llamada
        //             nos permiten reutilizar la función
        // include : nos permite incluir archivos externos, si no existe  la función ejecuta el programa, marcandonos solo el error de esa parte
        // require : si no existe la funcion no ejecuta el programa, nos marca error todo lo que este despues de require
    
        echo "Estes es el Primer mensaje <br>";

        include 'propociona_datos.php';
        echo "Estes es el segundo mensaje <br>";
        dameDatos();

     ?>
</body>
</html>