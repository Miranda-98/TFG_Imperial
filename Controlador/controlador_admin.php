<?php
require_once "../Modelo/usuario.php";
require_once "../Modelo/Estancia.php";

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
            
        }
 } else if (isset($_REQUEST['btnNuevaEstancia'])) {
    $nuevaEstancia = new Estancia($_POST['cod_estancia'],
                                    $_POST['estado'],
                                    $_POST['descripcion'],
                                    $_POST['ubicacion'],
                                    $_POST['planta'],
                                    $_POST['tipo'],
                                    $_POST['precio'],0,
                                    $_POST['localidad'],
                                    $_POST['estado']);
    if($nuevaEstancia->crearEstancia()){
        echo "Estancia creada";

    }
 }
?>