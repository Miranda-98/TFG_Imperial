<?php
        require_once "../Modelo/Foto.php";

        $foto = new Foto(6, "foto2.jpeg");
    
        // $foto->crearFoto();
        // $foto->borrar("foto", 5);
        // $foto->modificarFoto(4, 6, 'habitacionImperial.jpg');
        // echo $foto->obtenerTodosUsuarios()[0]['nombre'];
    
        echo "<h1>TODOS FOTO</h1>";
        $totalFoto = $foto->obtenerTodo();
        foreach($totalFoto as $hab) {
            echo $hab['foto'] . "<br/>";
        }
    
        echo "<br/><br/><h1>OBTENER FOTO POR ID</h1>";
        $fotoID = $foto->obtenerId(4);
        foreach($fotoID as $hab) {
            echo $hab['foto'] . "<br/>";
        }
?>