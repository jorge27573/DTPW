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
        <h2>Arreglos Asociativos</h2>
        <article class="content">
            <?php 
               $estudiante = array(
                    'nombre' => 'Jorge',
                    'apellidos' =>'Toledo Moreno',
                    'pais'=>'España'
               );
            
            ;?>

            <h1>Hola!! <?php echo $estudiante['nombre'] . " " . $estudiante['apellidos'] ;?></h1>
         
        
        </article>
    </section>
</body>
</html>