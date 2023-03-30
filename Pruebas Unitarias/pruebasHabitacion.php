<?php
    require_once "../Modelo/habitacionDAO.php";

    $hab = new HabitacionDAO();
    $hab2 = new HabitacionDAO();

     $hab->crearHabitacion(6,2,'bañera');
    // $hab->borrarHabitacion(6);
    // $hab->modificarHabitacion(2, 2, 'jacuzzi');
    // echo $hab->obtenerTodosUsuarios()[0]['nombre'];

    echo "<h1>TODOS HABITACIONES</h1>";
    $totalHabitacion = $hab->obtenerTodoHabitacion();
    foreach($totalHabitacion as $hab) {
        echo $hab['num_camas'] . "<br/>";
    }

    echo "<br/><br/><h1>OBTENER HABITACION POR ID</h1>";
    $habitacionID = $hab2->obtenerHabitacionId(3);
    foreach($habitacionID as $hab) {
        echo $hab['num_camas'] . "<br/>";
    }

?>