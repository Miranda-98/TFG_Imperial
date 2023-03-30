<?php
    require_once "../Modelo/Usuario.php";
    require_once "../Modelo/CRUD.php";

    $user = new Usuario("Tatiana","Garcia","Alvarez","655555555","tatianaPanchis@gmail.com","TatianaGarcias01","1234");
    // $user = new CRUD();

    // $user->crearUsuario();
    // $user2->borrar("usuario", 2);
    // $user->modificarUsuario(3,"Britany","Mendez","Gomez","64444444","tatianaPanchis@gmail.com","Panchis","1234");
    // echo $user->obtenerTodosUsuarios()[0]['nombre'];

    echo "<h1>TODOS USUARIOS</h1>";
    $totalUsuario = $user->obtenerTodo();
    foreach($totalUsuario as $usuario) {
        echo $usuario['nombre'] . "<br/>";
    }

    echo "<br/><br/><h1>OBTENER USUARIO POR ID</h1>";
    $usuarioID = $user->obtenerId(1);
    foreach($usuarioID as $usuario) {
        echo $usuario['nombre'] . "<br/>";
    }

?>