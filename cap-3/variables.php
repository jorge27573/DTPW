<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendiendo php</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <section class="contenido">
    <h1>Aprendiendo Php</h1>
        <h2>Variables</h2>
        <article class="content">
            <?php 
            // Esto es un comentario de una sola linea.
            //Declaramos tres variables.
                $nombre = 'Jorge';
                $saludo = 'Hola a todos';
                $edad = 46;

            //concatenamos las variables.
            //Mostramos en Pantalla el resultado la variable concatenacion.
             
            $concatenacion =$saludo . ' Me llamo '. $nombre . ' y tengo '. $edad . 'años';

            echo $concatenacion;
            ;?>
         
        
        </article>
    </section>
</body>
</html>