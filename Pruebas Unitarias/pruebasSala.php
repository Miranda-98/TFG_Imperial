<?php
        require_once "../Modelo/salaDAO.php";

        $sala = new SalaDAO();
        $sala2 = new SalaDao();
    
        // $sala->crearSala(3,50,'boda');
        // $sala->borrarSala(2);
        // $sala->modificarSala(3, 250, 'boda');
        // echo $sala->obtenerTodosUsuarios()[0]['nombre'];
    
        echo "<h1>TODOS HABITACIONES</h1>";
        $totalSala = $sala->obtenerTodoSala();
        foreach($totalSala as $hab) {
            echo $hab['tipo_sala'] . "<br/>";
        }
    
        echo "<br/><br/><h1>OBTENER HABITACION POR ID</h1>";
        $salaID = $sala2->obtenersalaID(3);
        foreach($salaID as $hab) {
            echo $hab['tipo_sala'] . "<br/>";
        }
?>