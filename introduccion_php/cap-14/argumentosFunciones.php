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
                function saludar($nombre){
                    echo "Bienvenido {$nombre} al sitio";
                    echo '<br />';
                }
               
                function suma($num1,$num2){
                    $resultado = $num1 + $num2;
                    echo "La suma de los factores es = {$resultado}"  . '<br />';
                }
                saludar("Jorge");
                saludar("Juan luis");
                suma(3,5);
            ;?>
         
        
        </article>
    </section>
</body>
</html>