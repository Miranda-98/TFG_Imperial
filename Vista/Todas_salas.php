<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de habitaciones</title>
</head>
<body>
<?php
        include "../Controlador/controlador_admin.php";
?>

<h1>Todas las habitaciones</h1>
<br><br><br>
<style>table, td, th{border: solid black 1px;}</style>
                    <table>
                    <tr>
                        <th>cod_sala</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Planta</th>
                        <th>Estado</th>
                        <th>Aforo</th>
                        <th>Tipo de sala</th>
                        <th>Ubicación</th>
                        <th>Descripción</th>
                        <th>Localidad</th>
                        <th>cod_estancia</th>

                    </tr>
                    <?php
                 $salaGeneral->muestraSalas();
                    ?>      

</table>
<br><br><br>
</body>
</html>