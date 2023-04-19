<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>

</style>
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form method="post">
    <label for="nombre">Nombre:</label>
        <input type="text" name="nombrePropio" id="nombre" pattern="[A-Za-z]{3,20}" required><strong>*</strong>
<br>
        <label for="apellido1">Primer apellido:</label>
        <input type="text" name="primerApellido" id="apellido1" pattern="[A-Za-z]{3,20}" required><strong>*</strong>
        <br>
        <label for="apellido2">Segundo apellido:</label>
        <input type="text" name="segundoApellido" id="apellido2" pattern="[A-Za-z]{0,20}" >
        <br>
        <label for="celular">Teléfono de contacto:</label require>
        <input type="number" name="telefono" id="celular" pattern="[6789]{1}[0-9]{8}" required><strong>*</strong>
        <br>
        <label for="mail">Correo electrónico</label>
        <input type="email" name="correoElectronico" id="email" required><strong>*</strong>
        <br>
        <label for="user">Nombre de usuario:</label>
        <input type="text" name="nombreUsuario" id="nombreUsuario" pattern="[A-Za-z0-9]{3,20}" required><strong>*</strong>
        <br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="contraseñaUsuario" id="contraseña" pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/" required><strong>*</strong>
        <br>
        <!-- <input type="submit" name="btnNuevoAdmin" id=""> -->
        <input type="submit" value="Familia">
    </form>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="tenor-gif-embed" data-postid="24765936" data-share-method="host" data-aspect-ratio="0.853125" data-width="100%"><a href="https://tenor.com/view/family-fast-and-furious-endgame-bald-vin-diesel-gif-24765936">Family Fast And Furious GIF</a>from <a href="https://tenor.com/search/family-gifs">Family GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
<?php
include "../Controlador/controlador_sesion.php";
?>
</body>
</html>