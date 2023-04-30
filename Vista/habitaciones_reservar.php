
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de habitaciones para reservar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
</head>
<body>



    <?php
    // Calculamos el número de noches que va a pasar en el Hotel
   $fechaInicio =  new DateTime($_POST['datoFechaInicio']);
    $fechaFin = new DateTime($_POST['datoFechaFin']);
     //diff será el valor del número de días que estará el cliente en el establecimiento 
     $diff = $fechaInicio->diff($fechaFin);
    
    //Calculo de numero de habitaciones necesarias
    $numPersonas = (int)$_POST['adultos'];
    $numNiños = (int)$_POST['niños'];
    $numHabitaciones = ceil($numPersonas / 2);
   
    echo $diff->days . " Días <br> ";
    echo $numPersonas . " Personas <br> ";
    echo $numNiños . " Niños <br> ";
    echo $numHabitaciones . " habitaciones <br> ";
   
    $_SESSION['carrito']= [];

    $ReservaPrueba = new Reserva();
    $registro = $ReservaPrueba->disponibilidad();
    echo "<form method='post' action='../Controlador/controlador_carrito.php'>  
    <div class='row'> ";

    

    foreach($registro as $x){
        echo "
        <div class='col'>
            <div class='card mb-3  bg-light '   style='width: 26rem; '>
            <img src='../img/fotos/cuarto_completo.jpg' class='card-img-top alt='Imagen de Tarjeta'>
                <div class='card-body'>
                <h4 style='display:inline;'>Tipo:</h4><h2 style='display:inline;'> ". ucwords($x->tipo_estancia). "</h2>
                <h4 style='color: green;'>".$x->precio. "€/noche</h4>
                <p class='card-text'>".  $x->descripcion . "
                </p>

                <input type='checkbox' name='producto[]' class='btn-check' id='".$x->cod_estancia."' value='".$x->cod_estancia."' autocomplete='off' >
                <label class='btn btn-outline-primary' for='".$x->cod_estancia."'>Añadir</label>
                
                </div>
            </div>
        </div>";}
    echo "";
    ?>
    
    <input type='submit' class='btn btn-primary mb-4' name='btn_enviar_reservas' value='Reservar' >

    </div>
</form>
<?php
//Escondemos el dato en la web del numero de habitaciones para poder cogerlo con JS
echo "<form><input type='hidden' name='numeroMaximoHabitaciones' value='".$numHabitaciones ."'></form>";
?>
<script>
    //   Función que determina el numero de habitaciones que se pueden seleccionar
            var maxSeleccionados = document.querySelector('input[type="hidden"][name="numeroMaximoHabitaciones"]').value;
            console.log("Numero: ",maxSeleccionados);
            var checkboxes = document.getElementsByTagName('input');

                for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].addEventListener('change', function() {
                    var numSeleccionados = 0;
                    for (var j = 0; j < checkboxes.length; j++) {
                    if (checkboxes[j].checked) {
                        numSeleccionados++;
                    }
                    }
                    if (numSeleccionados > maxSeleccionados) {
                    this.checked = false;
                    alert("Según el número de personas usted debería reservar un máximo de "+maxSeleccionados+ " habitaciones");
                    //Aquí se puede meter algún mensaje que avise al usuario de que no seleccione más habitaciones ó
                    //Podemos pulsar el botón de enviar cuando haya seleccionado ya las habitaciones
                    }
                });
                }

</script>
</body>
</html>