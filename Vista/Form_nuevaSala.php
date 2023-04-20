<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Sala</title>
</head>
<body>
<?php
        include "../Controlador/controlador_admin.php";
?>

<h1>Nueva Sala</h1>
    <form method="post">
        
        <label for="cod_Sala">Código de Sala:</label>
        <input type="number" name="cod_Sala" id="">
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
        <label for="aforo">Aforo máximo:</label>
        <input type="number" name="aforo" id="">
        <br>
        <label for="tipo_Sala">Tipo de sala:</label>
        <select name="tipo_Sala">
            <option value="reunion">Reunion</option>
            <option value="conferencia">conferencia</option>
            <option value="boda">Bodas</option>
        </select>
        <br>
        <input type="submit" name="btnNuevaSala" id="">
    </form>
</body>
</html>