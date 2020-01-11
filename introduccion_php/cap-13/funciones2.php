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
                function saludar(){
                    echo 'Bienvenido a jtTemplates';
                    echo '<br />';
                }
               
                function suma(){
                    echo 2 + 2 . '<br />';
                }
              saludar();
              suma();
            ;?>
         
        
        </article>
    </section>
</body>
</html>