<?php
require_once "../Modelo/Habitacion.php";
require_once "../Modelo/Reserva.php";
$habitacion = new Habitacion('','','','','','','','','','','','');
$reserva = new Reserva();
  if (isset($_POST['btn_enviar_reservas'])){
      if (!empty($_POST['producto'])) {
        // Creamos un array sesion vacio para mantener los datos de las habitaciones que esta reservando el usuario
        $_SESSION['arrayhabitaciones']= [];
 // Creamos un array vacio para añadir los datos en un array normal
        $arrayHabitaciones = [];

        $productos = $_POST['producto'];
    
      // Recogemos el numero de habitaciones seleccionadas para hacer los cálculos
        $totalHabitaciones = sizeof($productos);
        $precioTotal =0;
        $vueltas = 1;
        foreach ($productos as $producto) {            

            $habi = $habitacion->obtenerIdHabitacionConEstancia($producto);

          // Cada habitacion será introducida en el array provisional como indice y el precio como el valor
            $arrayHabitaciones[$producto]=$habi[0]['precio'];

            $precioTotal =  $precioTotal + ($habi[0]['precio']);
          
            $vueltas++;
        }
        // Multiplicamos el total del precio de las habitaciones de un solo dia por el numero total de dias:
        $precioTotal =  $precioTotal* $_SESSION['arrayReserva']['numeroDias'];
        // Introducimos el array provisional en el de sesion para poder recuperarlo en el futuro
        $_SESSION['arrayhabitaciones']=$arrayHabitaciones;

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
            
            // print_r($_SESSION['arrayReserva']);
            // print_r($_SESSION['arrayhabitaciones']);
    
  } else if (isset($_REQUEST['enviar_Pago'])) {
    $arrayRecuperaCarrito = $_SESSION['arrayReserva'];
    $arrayRecuperaCarrito['numeroTarjeta']= $_POST['numeroTarjeta'];

    //Recogemos el array sesion de las habitaciones
    $habitaciones = $_SESSION['arrayhabitaciones'];
    // Recogemos los tres últimos numeros de la tarjeta de pago
      $longitud = strlen($arrayRecuperaCarrito['numeroTarjeta']);
      $ultimos_tres_digitos = substr($arrayRecuperaCarrito['numeroTarjeta'], $longitud - 3, 3);

    $_SESSION['arrayReserva']=$arrayRecuperaCarrito;

          //  print_r($_SESSION['arrayReserva']);
          // echo "<br>";
          // print_r($_SESSION['arrayhabitaciones']);
          //  echo "<br>";

    $informacionUsuario = $usuarioPrueba->obtieneInfoUsuario($_SESSION['correo_Usuario']);

        // print_r($informacionUsuario);
        // echo "<br>";
        // echo $informacionUsuario[0]->nombre;

        //Aquí hacemos la insercción de datos de la reserva: tablas RESERVAS y FACTURAS
        foreach ($habitaciones as $habitacion=>$precio) { 
          //Añadimos las reservas, tantas como habitaciones seleccionadas por el cliente
          $reserva->añadirReserva($informacionUsuario[0]->cod_usuario,$habitacion,$_SESSION['arrayReserva']['fechaInicio'],$_SESSION['arrayReserva']['fechaFin']);
          //Recogemos el numero de reserva efectuada para usarlo en la factura
          $numeroFactura = $reserva->nuevaFactura();
          //Vemos los extras que ha añadido el cliente y creamos un String de extras
          $stringExtras = "";
          if ($arrayRecuperaCarrito['lateCheckOut'] == "Si") {
            $stringExtras = $stringExtras . "LateCheckOut ";
          }
          if ($arrayRecuperaCarrito['todoIncluido'] == "Si") {
            $stringExtras =  $stringExtras . "TodoIncluido ";
          }
          if ($arrayRecuperaCarrito['recogidaAeropuerto'] == "Si") {
            $stringExtras =  $stringExtras . "RecogidaAeropuerto ";
          }
          //Añadimos la factura de la reserva
          $reserva ->añadirFactura($numeroFactura,$stringExtras,$arrayRecuperaCarrito['precioFinal'] );
         }
    
    
  }
