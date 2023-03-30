<?php
        require_once "../Modelo/Foto.php";
        require_once "../Modelo/CRUD.php";

        $foto = new Foto(6, "foto2.jpeg");
        // $foto2 = new CRUD();
    
        // $foto->crearFoto();
        // $foto->borrar("foto", 5);
        // $foto->modificarFoto(4, 6, 'habitacionImperial.jpg');
        // echo $foto->obtenerTodosUsuarios()[0]['nombre'];
    
        echo "<h1>TODOS HABITACIONES</h1>";
        $totalFoto = $foto->obtenerTodo();
        foreach($totalFoto as $hab) {
            echo $hab['foto'] . "<br/>";
        }
    
        echo "<br/><br/><h1>OBTENER HABITACION POR ID</h1>";
        $fotoID = $foto2->obtenerId(4);
        foreach($fotoID as $hab) {
            echo $hab['foto'] . "<br/>";
        }
?>