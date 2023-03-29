<?php
        require_once "../Modelo/fotoDAO.php";

        $foto = new FotoDAO();
        $foto2 = new FotoDAO();
    
        // $foto->crearFoto(2,'habitacionNormal.jpg');
        // $foto->borrarFoto(3);
        // $foto->modificarFoto(4, 2, 'habitacionImperial.jpg');
        // echo $foto->obtenerTodosUsuarios()[0]['nombre'];
    
        echo "<h1>TODOS HABITACIONES</h1>";
        $totalFoto = $foto->obtenerTodoFoto();
        foreach($totalFoto as $hab) {
            echo $hab['foto'] . "<br/>";
        }
    
        echo "<br/><br/><h1>OBTENER HABITACION POR ID</h1>";
        $fotoID = $foto2->obtenerFotoId(1);
        foreach($fotoID as $hab) {
            echo $hab['foto'] . "<br/>";
        }
?>