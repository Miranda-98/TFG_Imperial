<?php
        require_once "../Modelo/Sala.php";
        // require_once "../Modelo/CRUD.php";

        $sala = new Sala(1, "estancia 2", "interior", 1, 'imperial', 200, 10, 'madrid', 6, 800, 'boda');
        // $sala2 = new CRUD();
    
        
        //  $sala->crearSala();
        // $sala2->borrar("sala", 2);
        // $sala->modificarSala(5, 6, 250, 'conferencia');
        // echo $sala->obtenerTodosUsuarios()[0]['nombre'];

        // resultado -> OK
    
        echo "<h1>TODOS SALAS</h1>";
        $totalSala = $sala->obtenerTodoSala();
        // echo "<pre>"; 
        // var_dump($totalSala);
        // echo "</pre>";
        foreach($totalSala as $habi) {
            echo $habi['tipo_sala'] . "<br/>";
        }
    
        echo "<br/><br/><h1>OBTENER SALA POR ID</h1>";
        $salaID = $sala->obtenerIdSala(3);
        foreach($salaID as $hab) {
            echo $hab['tipo_sala'] . "<br/>";
        }
?>