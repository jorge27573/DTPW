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
                $frutas = array('Manzana','Pera', 'Naranja', 'Melon', 'Uvas');
                foreach($frutas as $fruta){
                    echo 'Una de mis frutas favoritas es: ' . $fruta . '<br/>';
                    echo '<hr>';
                }
            ;?>
         
        
        </article>
    </section>
</body>
</html>