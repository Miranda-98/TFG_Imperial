<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro Nuevos Usuarios</title>
    <script type="text/javascript" src="validacionFormulario.js"></script>
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form method="post">
    <fieldset>
        <legend>Registro</legend>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombrePropio" id="nombre" pattern="[A-Za-z]{3,20}" required>
<br>
        <label for="apellido1">Primer apellido:</label>
        <input type="text" name="primerApellido" id="apellido1" pattern="[A-Za-z]{3,20}" required>
        <br>
        <label for="apellido2">Segundo apellido:</label>
        <input type="text" name="segundoApellido" id="apellido2" pattern="[A-Za-z]{0,20}" >
        <br>
        <label for="celular">Teléfono de contacto:</label require>
        <input type="number" name="telefono" id="celular" pattern="[6789]{1}[0-9]{8}">
        <br>
        <label for="mail">Correo electrónico</label>
        <input type="email" name="correoElectronico" id="email" required>
        <br>
        <label for="user">Nombre de usuario:</label>
        <input type="text" name="nombreUsuario" id="nombreUsuario" pattern="[A-Za-z0-9]{3,20}" required>
        <br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="contraseñaUsuario" id="contraseña" pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/" required>
        <br>
        <input type="submit" name="btnNuevoAdmin" id="">
        </fieldset>
    </form>

<?php  
    include '../Controlador/controlador_admin.php';
?>
</body>
</html>