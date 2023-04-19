<?php
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

  } else{

    //include '../Vista/Home_principal.php';
 }

?>