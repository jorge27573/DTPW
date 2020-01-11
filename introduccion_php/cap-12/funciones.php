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
        <h2>Funciones PHP</h2>
        <article class="content">
            <?php 
              $frutas = array('Manzana', 'Naranja', 'Melon', 'Platano', 'Uvas', 'Pera');

              echo count($frutas);
              echo '<br />';

              $miNombre = 'Jorge Toledo Moreno';
              echo strlen($miNombre);
            $miNombre2 = str_replace(' ', '',$miNombre);
            echo strlen($miNombre2);
            echo '<br />';
            echo $miNombre2;
            echo '<br />';
            echo strtoupper($miNombre);
            echo '<br />';
            echo strtolower($miNombre);
            echo '<br />';

            $pass = 'abc';

            if (strlen($pass) < 5) {
                echo ' el password es muy debil';
            }else{
                echo 'el password es seguro';
            }
            ;?>
         
        
        </article>
    </section>
</body>
</html>