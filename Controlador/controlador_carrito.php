<?php
require_once "../Modelo/Habitacion.php";
$habitacion = new Habitacion('','','','','','','','','','','','');

if (isset($_POST['btn_enviar_reservas'])){
    if (!empty($_POST['producto'])) {
      $productos = $_POST['producto'];
      print_r($productos);
      echo "<br>";
      echo sizeof($productos);
      $precioTotal =0;
      $vueltas = 1;
      foreach ($productos as $producto) {
        echo "Se ha seleccionado la habitación: " . $producto . "<br>";
          $habi = $habitacion->obtenerIdHabitacionConEstancia($producto);
        
          print_r($habi);
          echo  "<br>";
          echo "Precio Habitación ". $vueltas.": " . $habi[0]['precio'];
          echo  "<br>";
          $precioTotal =  $precioTotal + ($habi[0]['precio']);
          echo  "<br>";
          echo  $precioTotal;
          $vueltas++;
      }
    } else {
      echo "No se ha seleccionado ningúna habitación.";
    }
  }
  
  
?>