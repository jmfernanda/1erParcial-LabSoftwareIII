<?php
 require "php-json-file-decode/json-file-decode.class.php";
 include 'claseTarea.php';

    $usuario = $_POST['inputUsuario'];
    $nombre_fichero = 'Archivos Json/'.$usuario.'.json';

    if (!file_exists($nombre_fichero)) {

        //Crear las tareas
        $fechaActual = date ('d-m-Y');

        $tareas = array();
        $tarea1 = new Tarea("Planear semana",$fechaActual,false);
        $tareas[0]= $tarea1;
        $tarea2 = new Tarea("Ser feliz",$fechaActual,false);
        $tareas[1]= $tarea2;

        //Crear el archivo .json
        $json_tareas = json_encode($tareas);
        $handler = fopen($nombre_fichero, "w+");
        fwrite($handler, $json_tareas);
        fclose($handler);
    }

    $read = new json_file_decode();
    $json = $read->json($nombre_fichero);
?>