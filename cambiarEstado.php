<?php
    include 'claseTarea.php';
    $posicion = $_GET["posicion"];
    $archivo = 'Archivos Json/'.$_GET["usuario"].'.json';
    $objeto = json_decode(file_get_contents($archivo));
    if ($objeto[$posicion]->estado==true){
        $tarea = new Tarea ($objeto[$posicion]->nombre, $objeto[$posicion]->fechaCreacion, false);
    }
    else{
        $tarea = new Tarea ($objeto[$posicion]->nombre, $objeto[$posicion]->fechaCreacion, true);
    }
    $objeto[$posicion] = $tarea;
    file_put_contents($archivo, json_encode($objeto));
?>