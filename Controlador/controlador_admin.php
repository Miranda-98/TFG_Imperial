<?php
require_once "../Modelo/usuario.php";

if(isset($_REQUEST['btnNuevoAdmin'])){
    $nuevoUsuario = new Usuario($_POST['nombrePropio'],
                                $_POST['primerApellido'],
                                $_POST['segundoApellido'],
                                $_POST['telefono'],
                                $_POST['correoElectronico'],
                                $_POST['nombreUsuario'],
                                $_POST['contraseñaUsuario'],
                                'admin');
                                
        if($nuevoUsuario->crearUsuario()){
            echo "Usuario creado";
            header('location:home.php?btn_eliminar_Admin');
           
        }
 }
?>