<?php
include 'claseTarea.php';
    $nomTarea = $_GET["tarea"];
    $archivo = 'Archivos Json/'.$_GET["usuario"].'.json';
    $objeto = json_decode(file_get_contents($archivo));
    $index = count($objeto);
    $tarea = new Tarea($nomTarea, date('d-m-Y'), false);
    $objeto[$index] = $tarea;
    file_put_contents($archivo, json_encode($objeto));
?>