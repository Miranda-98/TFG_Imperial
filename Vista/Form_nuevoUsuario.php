<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>

<body>
<?php
    include "../Controlador/controlador_sesion.php";
    ?>
    <div class="contenedorFormulario">
        <h1>Nuevo Usuario</h1>
        <div class="formularioRegistro">
            <form method="post">
                <fieldset>
                <legend>Registro</legend>
                <!-- <label for="nombre">Nombre: *</label>
                <input type="text" name="nombrePropio" id="nombre" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ\s]{3,20}$" required>
                
                <label for="apellido1">Primer apellido: *</label>
                <input type="text" name="primerApellido" id="apellido1" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ\s]{3,20}$" required>
                
                <label for="apellido2">Segundo apellido: *</label>
                <input type="text" name="segundoApellido" id="apellido2" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ\s]{3,20}$">
                
                <label for="celular">Teléfono de contacto: *</label require>
                <input type="tel" name="telefono" id="celular" pattern="[6789]\d{8}$" required>
                
                <label for="mail">Correo electrónico: *</label>
                <input type="email" name="correoElectronico" id="email" pattern="/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/" required>
                
                <label for="user">Nombre de usuario: *</label>
                <input type="text" name="nombreUsuario" id="nombreUsuario" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ0-9\s]{3,20}$" required>
                
                <label for="pass">Contraseña: *</label>
                <input type="password" id="password" name="contraseñaUsuario" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+\-=[\]{};':\\|,./?]).{8,20}">
                    <br> -->
                    <label for="nombre">Nombre: *</label>
                <input type="text" name="nombrePropio" id="nombre" >
                
                <label for="apellido1">Primer apellido: *</label>
                <input type="text" name="primerApellido" id="apellido1" >
                
                <label for="apellido2">Segundo apellido: *</label>
                <input type="text" name="segundoApellido" id="apellido2" >
                
                <label for="celular">Teléfono de contacto: *</label >
                <input type="tel" name="telefono" id="celular" >
                
                <label for="mail">Correo electrónico: *</label>
                <input type="email" name="correoElectronico" id="email">
                
                
                <!-- <label for="user">Nombre de usuario: *</label>
                <input type="text" name="nombreUsuario" id="nombreUsuario" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ0-9\s]{3,20}$" required> -->
                
                <label for="pass">Contraseña: *</label>
                <input type="password" id="password" name="contraseñaUsuario" >
                    <div id="fuerza" value=""></div>
                    <input type="submit" name="btnNuevoUsuario" id="">
                                                                                                             <p><?php echo $msg ?? '' ?></p>
                </fieldset>
            </form>
        </div>

    </div>


   
    <!-- <div class="tenor-gif-embed" data-postid="24765936" data-share-method="host" data-aspect-ratio="0.853125" data-width="100%"><a href="https://tenor.com/view/family-fast-and-furious-endgame-bald-vin-diesel-gif-24765936">Family Fast And Furious GIF</a>from <a href="https://tenor.com/search/family-gifs">Family GIFs</a></div> -->
    <!-- <script type="text/javascript" async src="https://tenor.com/embed.js"></script> -->
    
</body>
<!-- <script type="text/javascript" src="fuerzaContraseña.js"></script> -->

</html>