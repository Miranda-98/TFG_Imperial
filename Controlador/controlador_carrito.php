<?php
require_once "../Modelo/Habitacion.php";
$habitacion = new Habitacion('','','','','','','','','','','','');

if (!empty($_POST['producto'])) {
    $productos = $_POST['producto'];
    print_r($productos);
    foreach ($productos as $producto) {
      echo "Se ha seleccionado la habitación: " . $producto . "<br>";
        $habi = $habitacion->obtenerIdHabitacionConEstancia($producto);
        print_r($habi);
        echo  "<br>";
    }
  } else {
    echo "No se ha seleccionado ningúna habitación.";
  }
?>