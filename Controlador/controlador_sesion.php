<?php
require_once "../Modelo/usuario.php";

if(isset($_REQUEST['inicio_Sesion'])){
    header("location:../Vista/Inicio_sesion.php");
}

if(isset($_REQUEST['btnNuevoUsuario'])){
    $nuevoUsuario = new Usuario($_POST['nombrePropio'],
                                $_POST['primerApellido'],
                                $_POST['segundoApellido'],
                                $_POST['telefono'],
                                $_POST['correoElectronico'],
                                $_POST['nombreUsuario'],
                                $_POST['contraseñaUsuario'],
                                'cliente');
                                
        if($nuevoUsuario->crearUsuario()){
            echo "Usuario creado";
            session_start();
            $_SESSION['nom_Usuario']= $nuevoUsuario->__get('usuario');
            header("location:home.php");
        }else {
            echo "Algo salió mal";
        }
}

if(isset($_REQUEST['cerrar_usuario'])){
   
  session_destroy();

    header("Refresh:0");
}

if(isset($_REQUEST['btnEnviarUsuario'])){
    $usuarioEjemplo = new Usuario('','','','','',$_POST['user'],$_POST['contrasena'],'');
    if($usuarioEjemplo->comprobarUsuarioBD($_POST['user'],$_POST['contrasena'],$usuarioEjemplo)){
        session_start();
        $_SESSION['nom_Usuario']= $usuarioEjemplo->__get('usuario');
        header("location:home.php");
    }
    // else{

    // }
}


?>