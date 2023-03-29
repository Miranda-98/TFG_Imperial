<?php
    require_once "../Modelo/usuarioDAO.php";

    $user = new UsuarioDAO();
    $user2 = new UsuarioDAO();

    // $user->crearUsuario("Tatiana","Garcia","Alvarez","655555555","tatianaPanchis@gmail.com","TatianaGarcias01","1234");
    // $user->borrarUsuario(6);
    // $user->modificarUsuario(6,"Britany","Mendez","Gomez","64444444","tatianaPanchis@gmail.com","Panchis","1234");
    // echo $user->obtenerTodosUsuarios()[0]['nombre'];

    echo "<h1>TODOS USUARIOS</h1>";
    $totalUsuario = $user->obtenerTodosUsuarios();
    foreach($totalUsuario as $usuario) {
        echo $usuario['nombre'] . "<br/>";
    }

    echo "<br/><br/><h1>OBTENER USUARIO POR ID</h1>";
    $usuarioID = $user->obtenerUsuarioId(2);
    foreach($usuarioID as $usuario) {
        echo $usuario['nombre'] . "<br/>";
    }

?>