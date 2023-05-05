<?php
require_once "../Modelo/Habitacion.php";
$habitacion = new Habitacion('','','','','','','','','','','','');

if (isset($_POST['btn_enviar_reservas'])){
    if (!empty($_POST['producto'])) {
      $productos = $_POST['producto'];
   
    // Recogemos el numero de habitaciones seleccionadas para hacer los cálculos
      $totalHabitaciones = sizeof($productos);
      $precioTotal =0;
      $vueltas = 1;
      foreach ($productos as $producto) {
        
          $habi = $habitacion->obtenerIdHabitacionConEstancia($producto);

          $precioTotal =  $precioTotal + ($habi[0]['precio']);
         
          $vueltas++;
      }
      // Multiplicamos el total del precio de las habitaciones de un solo dia por el numero total de dias:
      $precioTotal =  $precioTotal* $_SESSION['arrayReserva']['numeroDias'];
      
    } else {
      echo "No se ha seleccionado ningúna habitación.";
    }
  } else if (isset($_REQUEST['btn_enviar_extras'])) {
   
    $arrayRecuperaCarrito = $_SESSION['arrayReserva'];
    $arrayRecuperaCarrito['lateCheckOut']= $_POST['lateCheckOut'];
    $arrayRecuperaCarrito['todoIncluido']= $_POST['todoIncluido'];
    $arrayRecuperaCarrito['recogidaAeropuerto']= $_POST['aeropuerto'];
    $arrayRecuperaCarrito['precioFinal']= $_POST['precioEscondido'];
    $_SESSION['arrayReserva']=$arrayRecuperaCarrito;
    print_r($_SESSION['arrayReserva']);
  }
  

  
?>