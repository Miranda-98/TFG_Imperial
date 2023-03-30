<?php
    require_once "../Modelo/Usuario.php";
    require_once "../Modelo/CRUD.php";

    $user = new Usuario();
    $user2 = new CRUD();

    // $user->crearUsuario("Tatiana","Garcia","Alvarez","655555555","tatianaPanchis@gmail.com","TatianaGarcias01","1234");
    // $user->borrarUsuario(6);
    // $user->modificarUsuario(6,"Britany","Mendez","Gomez","64444444","tatianaPanchis@gmail.com","Panchis","1234");
    // echo $user->obtenerTodosUsuarios()[0]['nombre'];

    echo "<h1>TODOS USUARIOS</h1>";
    $totalUsuario = $user2->obtenerTodo("usuario");
    foreach($totalUsuario as $usuario) {
        echo $usuario['nombre'] . "<br/>";
    }

    echo "<br/><br/><h1>OBTENER USUARIO POR ID</h1>";
    $usuarioID = $user2->obtenerId("usuario", 2);
    foreach($usuarioID as $usuario) {
        echo $usuario['nombre'] . "<br/>";
    }

?>