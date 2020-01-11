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
                function the_title( ){
                    echo "El titulo de mi blog";
                }
                function the_date( ){
                    echo date('Y m d');
                }
                function the_author( ){
                    echo "Jorge Toledo";
                }
            ;?>

            <div class="entrada">
                <h2><?php  the_title();?></h2>
                <p>Publicado el: <?php the_date()  ;?></p>
                <p><small>Publicado por: <?php the_author() ;?></small></p>
            </div>
        
        </article>
    </section>
</body>
</html>