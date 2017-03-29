<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 

        echo "Estes es el Primer mensaje <br>";
        // funciones : no se ejecuta hasta que sea llamada
        //             nos permiten reutilizar la función

        function dameDatos(){
            echo "Este es el mensaje de la función <br>";

        }
        dameDatos();
        echo "Estes es el segundo mensaje <br>";

     ?>
</body>
</html>