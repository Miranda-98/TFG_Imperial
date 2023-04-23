<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro Nuevos Administradores</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</head>

<body>

    <div class="contenedorFormulario">
        <h1>Nuevo Administrador</h1>
        <div class="formularioRegistro">
            <form method="post">
                <!-- <fieldset> -->

                <legend>Registro</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombrePropio" id="nombre" class="form-control" pattern="[A-Za-z]{3,20}" required>

                <label for="apellido1">Primer apellido:</label>
                <input type="text" name="primerApellido" id="apellido1" class="form-control" pattern="[A-Za-z]{3,20}" required>

                <label for="apellido2">Segundo apellido:</label>
                <input type="text" name="segundoApellido" id="apellido2" class="form-control" pattern="[A-Za-z]{0,20}">

                <label for="celular">Teléfono de contacto:</label require>
                <input type="number" name="telefono" id="celular" class="form-control" pattern="[6789]{1}[0-9]{8}" required>

                <label for="mail">Correo electrónico</label>
                <input type="email" name="correoElectronico" id="email" class="form-control" required>

                <label for="user">Nombre de usuario:</label>
                <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" pattern="[A-Za-z0-9]{3,20}" required>

                <label for="pass">Contraseña:</label>
                <input type="password" name="contraseñaUsuario" id="contraseña" class="form-control" required>

                <div id="fuerza" value=""></div>
                <input type="submit" name="btnNuevoAdmin" id="botonRegistro">

                <!-- </fieldset> -->

            </form>
        </div>
    </div>
    <br /><br /><br /><br />

    <?php
    include '../Controlador/controlador_admin.php';
    ?>
</body>
<script type="text/javascript" src="validacionFormulario.js"></script>

</html>