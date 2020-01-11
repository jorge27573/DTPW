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
        <h2>Condicionales</h2>
        <article class="content">
            <?php 
                $num1=20;
                $num2 =19;

                if($num1 > $num2){
                    echo 'el numero 1 es mayor';
                }else{
                    echo 'el numero 2 es menor';
                }
                echo '<br/>';
                echo '<hr>';
                if($num1 < $num2){
                    echo 'el numero 1 es mayor';
                }else{
                    echo 'el numero 2 es menor';
                }
                echo '<br/>';
                echo ' <hr>';
                if($num1 == $num2){
                    echo 'el numero 1 y el numero 2 son iguales';
                }else{
                    echo 'el numero 1 y el numero 2 no son iguales';
                
                }

            ;?>
         
        
        </article>
    </section>
</body>
</html>