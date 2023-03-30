<?php
    require_once "../Modelo/estanciaDAO.php";

    $estancia = new EstanciaDAO();
    $estancia2 = new EstanciaDAO();

    $estancia->crearEstancia(1, "estancia 1", "exterior", 1, 'lujo', 200, 10, 'madrid');
    // $estancia->borrarEstancia(5);
    // $estancia->modificarEstancia(4, "ocupado", "estancia creada desde DAO", "exterior", 1, "lujo", 200, 10, "madrid");
    // estancia $user->obtenerTodosUsuarios()[0]['nombre'];

    echo "<h1>TODOS USUARIOS</h1>";
    $totalEstancias = $estancia->obtenerTodosEstancia();
    foreach($totalEstancias as $usuario) {
        echo $usuario['descripcion'] . "<br/>";
    }

    echo "<br/><br/><h1>OBTENER USUARIO POR ID</h1>";
    $estanciaID = $estancia2->obtenerEstanciaId(2);
    foreach($estanciaID as $usuario) {
        echo $usuario['estado'] . "<br/>";
    }

?>