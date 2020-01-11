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
        <h2>Ciclo for</h2>
        <article class="content">
            <?php 
               for ($i=0; $i <= 10   ; $i++) { 
                   echo $i;
                   echo '<br/>';
               } for ($i=0; $i <= 10   ; $i++) { 
                    if ($i == 5) {
                        echo 'ES CINCO!! <br />';
                    break;
                    }
                    echo 'El numero es: ' . $i . '<br />';
                 }

            ;?>
         
        
        </article>
    </section>
</body>
</html>