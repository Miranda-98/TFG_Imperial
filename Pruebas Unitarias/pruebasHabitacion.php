<?php
    require_once "../Modelo/Habitacion.php";

    $hab = new Habitacion(1, "estancia 1", "exterior", 1, 'lujo', 200, 10, 'madrid',6, 2, 'jacuzzi');

    // $hab->crearHabitacion();
    //  $hab->borrar("habitacion", 7);
    // $hab->modificarHabitacion(4, 6, 2, 'ducha');
    // echo $hab->obtenerTodosUsuarios()[0]['nombre'];

    echo "<h1>TODOS HABITACIONES</h1>";
    $totalHabitacion = $hab->obtenerTodo();
    foreach($totalHabitacion as $hab) {
        echo $hab['num_camas'] . "<br/>";
    }

    echo "<br/><br/><h1>OBTENER HABITACION POR ID</h1>";
    $habitacionID = $hab2->obtenerId(3);
    foreach($habitacionID as $hab) {
        echo $hab['num_camas'] . "<br/>";
    }

?>