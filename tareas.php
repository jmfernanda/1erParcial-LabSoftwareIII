<?php

 include 'obtenerTareas.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Estilos/style.css">
    <title>Tareas</title>

    <script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="gestionTareas.js"></script>

</head>
<body>
    <nav class="barra">
    <ul>
        <li><p>Visor de tareas</p></li>
        <li style="float:right"><p>Tu identificación: <?php echo $_POST['inputUsuario']?></p></li>
        </ul>
    </nav>
    
    <div  class="centrado">
        <h1 id="titulo1">¡Bienvenido!</h1>
        <p>
            Este es un nuevo visualizador de tareas. Aquí puedes llevar un control de todas las labores que tienes
            que realizar. Puedes tachar las tareas cuando ya han sido realizadas o dejarlas sin tachar cuando aún
            están pendientes. Además, puedes agregar nuevas tareas si lo necesitas.
        </p>
    </div>
    <div id="container" class="centrado">
       <h2 id="tituloLista">Tu lista de tareas</h2>
        <ul class="lista" id="lista">
            <?php
                for($i=0; $i<count($json); $i++):?>
                    <li <?php if($json[$i]["estado"]==true):?>class="tachado"<?php endif?> onClick="tachar_enviar(this, <?php echo $i ?>, <?php echo $usuario?>)">
                        <label for="c<?php echo $i?>">
                            <input id="c<?php echo $i?>" type="checkbox" <?php if($json[$i]["estado"]==true):?>checked<?php endif?>>
                            <?php echo $json[$i]["nombre"]?>
                            <label id="fecha"><?php echo $json[$i]["fechaCreacion"]?></label>
                        </label>
                    </li>
                <?php endfor?>
        </ul>
        <br>
        <input type="text" id="tarea_nueva" class="textAgregar" placeholder="Ej. Estudiar para parcial">
        <input type="button" id="agregar_tarea" class="botonAgregar" 
            onClick="TareaNueva(<?php echo $usuario?>,<?php echo count($json)?>)" value="Agregar nueva tarea">
    </div> 
</body>
</html>