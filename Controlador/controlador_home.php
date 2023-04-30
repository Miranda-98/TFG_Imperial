<?php
require_once '../Modelo/Reserva.php';

if(isset($_REQUEST['btn_Administracion'])){
   
    include '../Vista/Home_Administracion.php';

 }else if (isset($_REQUEST['btn_Inicio'])){

    include '../Vista/Home_principal.php';

  }else if (isset($_REQUEST['btn_aniadir_Admin'])){

    include '../Vista/From_nuevoAdmin.php';

  }else if (isset($_REQUEST['btn_eliminar_Admin'])) {

    include '../Vista/tabla_usuarios.php';

  }else if (isset($_REQUEST['btn_anadir_estancia'])) {

    include '../Vista/Form_nuevaEstancia.php';

  } else if (isset($_REQUEST['btn_pagina_Galeria'])) {
    
    include '../Vista/Galeria.php';
  
  }else if (isset($_REQUEST['btn_anadir_habitacion'])) {
    
    include '../Vista/Form_nuevaHabitacion.php';
  
  }else if (isset($_REQUEST['btn_anadir_sala'])) {
    
    include '../Vista/Form_nuevaSala.php';
  
  }else if (isset($_REQUEST['btn_ver_habitaciones'])) {
    
    include '../Vista/Todas_habitaciones.php';
  
  }else if (isset($_REQUEST['btn_ver_salas'])) {
    
    include '../Vista/Todas_salas.php';

  } else if (isset($_REQUEST['btn_pagina_FQ'])) {
    
    include '../Vista/Preguntas_frecuentes.php';
  
  } else if (isset($_REQUEST['bton_formulario_principal'])) {
    
    $ReservaPrueba = new Reserva();
    $registro = $ReservaPrueba->disponibilidad();
    echo "<style>table, td, th{border: solid black 1px;}</style>
    <table>
    <tr>
        <th>cod_habitación</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th>Planta</th>
        <th>Estado</th>
        <th>nº camas</th>
        <th>Tipo de baño</th>
        <th>Ubicación</th>
        <th>Descripción</th>
        <th>Localidad</th>
        <th>cod_estancia</th>

    </tr>";
    foreach($registro as $x){
      echo "<tr>
      <td>". $x->cod_estancia . "</td>
      <td>". $x->estado . "</td>
      <td>". $x->descripcion ."</td>
      <td>". $x->ubicacion . "</td>
      <td>". $x->planta ."</td>
      <td>". $x->tipo_estancia ."</td>
      <td>". $x->precio ."</td>
      <td>". $x->cod_habitacion ."</td>
      <td>". $x->num_camas ."</td>
      <td>". $x->tipo_bano ."</td>
      <td><form method='post'> <button name=borrarAdmin value='DatoPrueba'>Borrar</button></form></td>
      </tr>";
  }
  echo "
  </table>";
    // print_r($registro);
  
  } else{

    include '../Vista/Home_principal.php';
 }


 
 


?>