<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir habitación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="text/css" href="../Vista/style.css">
    <link rel="stylesheet" type="text/css" href="../Vista/mediaQuery.css">
</head>
<body>
<?php
        include "../Controlador/controlador_admin.php";
?>

<h1>Nueva Habitación</h1>
    <form method="post">
        
        <label for="cod_habitacion">Código de Habitación:</label>
        <input type="number" name="cod_habitacion" id="">
        <br>
        <label for="cod_estancia">Código de Estancia:</label>
        <select name="cod_estancia">
        <?php
        foreach ($estanciasDisponibles as $key) {
           echo "<option value='$key->cod_estancia'>".$key->cod_estancia."</option>";
        }
        ?>
        </select>
        <br>
        <label for="num_camas">Número de camas:</label>
        <select name="num_camas">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <br>
        <label for="tipo_baño">Tipo de baño:</label>
        <select name="tipo_bano">
            <option value="bañera">Bañera</option>
            <option value="ducha">Plato de ducha</option>
            <option value="jacuzzi">Jacuzzi</option>
        </select>
        <br>
        <input type="submit" name="btnNuevaHabitacion" id="">
    </form>
</body>
</html>