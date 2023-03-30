<?php
    require_once "../Modelo/Habitacion.php";

    $hab2 = new Habitacion(1, "estancia 1", "exterior", 1, 'lujo', 200, 10, 'madrid',6, 2, 'jacuzzi');
    // $hab2 = new CRUD();

    // $hab->crearHabitacion();
    //  $hab->borrar("habitacion", 7);
    // $hab->modificarHabitacion(4, 6, 2, 'ducha');
    // echo $hab->obtenerTodosUsuarios()[0]['nombre'];

    echo "<h1>TODOS HABITACIONES</h1>";
    $totalHabitacion = $hab->obtenerTodoHabitacion();
    echo "<pre>";
    print_r($totalHabitacion);
    echo "</pre>";
    foreach($totalHabitacion as $hab) {
        echo $hab['num_camas'] . "<br/>";
    }

    echo "<br/><br/><h1>OBTENER HABITACION POR ID</h1>";
    $habitacionID = $hab2->obtenerIdHabitacion(3);
    // print_r($habitacionID);
    // foreach($habitacionID as $hab) {
    //     echo $hab['num_camas'] . "<br/>";
    // }

?>