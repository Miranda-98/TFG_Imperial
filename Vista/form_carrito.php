<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
    <title>Carrito</title>
</head>
<body>
<?php
include '../Controlador/controlador_carrito.php';
?>
<h2>Extras:</h2>
<form id="formulario">
  <div>
    <h3>Late CheckOut (20€):</h3>
    <div>
      <input type="radio" id="lateCheckOutSi" name="lateCheckOut" value="Si">
      <label for="lateCheckOutSi">Si</label>
    </div>
    <div>
      <input type="radio" id="lateCheckOutNo" name="lateCheckOut" value="No" checked>
      <label for="lateCheckOutNo">No</label>
    </div>
  </div>
  <div>
    <h3>Todo Incluido (100€):</h3>
    <div>
      <input type="radio" id="todoIncluidoSi" name="todoIncluido" value="Si">
      <label for="todoIncluidoSi">Si</label>
    </div>
    <div>
      <input type="radio" id="todoIncluidoNo" name="todoIncluido" value="No" checked>
      <label for="todoIncluidoNo">No</label>
    </div>
  </div>
  <div>
    <h3>Recogida/Ida Aeropuerto (75€):</h3>
    <div>
      <input type="radio" id="aeropuertoSi" name="aeropuerto" value="Si">
      <label for="aeropuertoSi">Si</label>
    </div>
    <div>
      <input type="radio" id="aeropuertoNo" name="aeropuerto" value="No" checked>
      <label for="aeropuertoNo">No</label>
    </div>
  </div>
  <div>
    <h3>Pago Ahora (-10€):</h3>
    <div>
      <input type="radio" id="pagoAhoraSi" name="pagoAhora" value="Si">
      <label for="pagoAhoraSi">Si</label>
    </div>
    <div>
      <input type="radio" id="pagoAhoraNo" name="pagoAhora" value="No" checked>
      <label for="pagoAhoraNo">No</label>
    </div>
  </div>
  <div>
    <h3>Precio:</h3>
    <div id="precio"><?=$precioTotal?></div>
  </div>
  <button type="submit">Enviar</button>
</form>

<form>
    <input type="hidden" name="preciototal" id="preciototal" value="<?=$precioTotal?>">
</form>
<script>
  const precioBase = parseInt(document.getElementById('preciototal').value);
  console.log(precioBase);
  const preciosAdicionales = {
    lateCheckOut: 20,
    todoIncluido: 100,
    aeropuerto: 75,
    pagoAhora: -10
  }

  const formulario = document.getElementById('formulario');
  const precioElemento = document.getElementById('precio');

  formulario.addEventListener('change', () => {
    let precioTotal = precioBase;

    for (const [opcion, precio] of Object.entries(preciosAdicionales)) {
      const input = document.querySelector(`input[name=${opcion}]:checked`);
      if (input.value === 'Si') {
        precioTotal += precio;
      } 

    }

    precioElemento.textContent = precioTotal;
  });
</script>
</body>
</html>