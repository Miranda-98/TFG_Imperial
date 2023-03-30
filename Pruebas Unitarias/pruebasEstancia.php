<?php
    require_once "../Modelo/Estancia.php";

    $estancia = new Estancia(1, "estancia 1", "exterior", 1, 'lujo', 200, 10, 'madrid');
    // $estancia2 = new CRUD();

    // $estancia->crearEstancia();
    $estancia->borrar(7);
    // $estancia->modificarEstancia(6, "ocupado", "estancia creada desde DAO", "exterior", 1, "lujo", 200, 10, "madrid");


    /*
        prueba obtener
        estancia $user->obtenerTodosUsuarios()[0]['nombre'];
    */

    echo "<h1>TODOS USUARIOS</h1>";
    $totalEstancias = $estancia->obtenerTodo();
    foreach($totalEstancias as $usuario) {
        echo $usuario['descripcion'] . "<br/>";
    }

    echo "<br/><br/><h1>OBTENER USUARIO POR ID</h1>";
    $estanciaID = $estancia2->obtenerId(6);
    foreach($estanciaID as $usuario) {
        echo $usuario['estado'] . "<br/>";
    }

?>