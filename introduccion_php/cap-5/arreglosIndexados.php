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
        <h2>Arreglos Indexados</h2>
        <article class="content">
            <?php 
                $frutas = array('Manzana', 'Naranja','Platano', 'melon','uvas');
                //añadimos un elemento al array
                array_push($frutas, 'pera');

                //eliminamos un elemento del array
                unset($frutas[1]);

                //Mostramos en pantalla el array
                echo '<pre>';
                    print_r($frutas);
                echo '</pre>';
            ;?>
         
        
        </article>
    </section>
</body>
</html>