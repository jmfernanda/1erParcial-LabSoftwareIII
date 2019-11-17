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
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="gestionTareas.js"></script>

</head>
<body>

    <h1 class="titulo1">¡Bienvenido!</h1>
    <div id="informacion" class="centrado">
        <p>
            Este es un nuevo visualizador de tareas. Aquí puedes llevar un control de todas tu tareas tachando
            las ya realizadas o dejándolas sin tachar cuando están pendientes. Además,
            puedes agregar nuevas tareas si así lo deseas.
        </p>
        <br>
        <label>
            Tu número de identificación: <?php echo $_POST['inputUsuario']?>
        </label>
    </div>
    <br>
    <h2 id="tituloLista" class="centrado">Tu lista de tareas</h2>
    <div id="container" class="centrado">
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