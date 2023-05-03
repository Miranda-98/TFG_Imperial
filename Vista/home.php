<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Retreat</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">


    <!-- <script src="script.js"></script> -->




</head>
<?php
session_start();
if (isset($_SESSION['nom_Usuario'])) {
    $perfilUsuario = "<button name=perfil_usuario value='perfil_usuario' class='btnIni'>" . $_SESSION['nom_Usuario'] . "</button> 
            <br> <button name=cerrar_usuario value='cerrar_usuario' class='btnIni'>Cerrar sesión</button>";
} else {
    $perfilUsuario = "<button name='inicio_Sesion' value='inicio_Sesion' class='btnIni'>Iniciar Sesión</button>";
}

?>

<body>



    <!-- BARRA DE NAVEGACION PRINCIPAL -->
    <nav id="headerSuperior" class="navbar navbar-expand-lg navbar-light bg-secondary justify-content-between">
        <!-- div icono-->
        <div>
            <a class="">
                <img src="../img/logo4.png" alt="Imperial Retreat Logo" title="Imperial Retreat" width="80" height="80" />
            </a>
        </div>

        <!-- div nombre-->
        <div>
            <!-- <a class="titulo">
                Imperial Retreat
            </a> -->
            <form method="post">
                <button name="btn_Inicio" class="nav-link active titulo">Imperial Retreat</button>
            </form>
           
        </div>

        <!-- div usuario-->
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form method="POST">
                        <?= $perfilUsuario ?>
                    </form>
                </li>
            </ul>
        </div>

        <?php
        include '../Controlador/controlador_sesion.php';
        ?>
    </nav>


    <!-- BARRA DE NAVEGACION PAGINAS WEB -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <!-- <button class="navbar-toggler" id="hamburguesa" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav"> -->
                <form method="post">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button name="btn_Inicio" class="nav-link active">Inicio</button>
                        <li class="nav-item">
                            <button class="nav-link active" aria-current="page" name="btn_pagina_Galeria">Galeria</button>
                        </li>

                        <!-- <li class="nav-item">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Reservas</option>
                                <option value="1">Habitaciones</option>
                                <option value="2">Sala de Evento</option>
                            </select>
                        </li> -->
                        <li class="nav-item">
                            <button class="nav-link active" href="#">Habitaciones</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active" href="#">Eventos</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active" href="#">Ofertas</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active" href="#">Contacto</button>
                        </li>

                        <?php
                        if (isset($_SESSION['tipo_Usuario']) && $_SESSION['tipo_Usuario'] == 'admin') {
                        ?>
                            <li class="nav-item">
                                <button name="btn_Administracion" class="nav-link active">Administración</button>
                            </li>
                        <?php
                        }
                        ?>

                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
        // include '../Controlador/controlador_sesion.php';
        include '../Controlador/controlador_home.php';
        include "../Controlador/controlador_admin.php";
        ?>
    </div>


    <!-- CARROUSEL 
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/fotos/cuarto_frente_completo.jpg" class="d-block w-100" alt="..." height="500px">
            </div>
            <div class="carousel-item">
                <img src="../img/fotos/cuarto_horizontal.jpg" class="d-block w-100" alt="..." height="500px">
            </div>
            <div class="carousel-item">
                <img src="../img/fotos/terraza_completo.jpg" class="d-block w-100" alt="..." height="500px">
            </div>
            <div class="carousel-item">
                <img src="../img/fotos/baño_completo.jpg" class="d-block w-100" alt="..." height="500px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br /><br /><br /><br />-->

    <!-- Formulario Reserva -->
    <!-- <div style="display:flex; justify-content: center;">
        <table class="table-responsive">
            <tr>
                <td>
                    <label for="fechaEntrada">Fecha entrada</label><br/>
                    <input type="date" id="fechaEntrada">
                </td>

                <td>
                    <label for="fechaSalida">Fecha Salida</label><br/>
                    <input type="date" id="fechaEntrada">
                </td>
            </tr>


            <tr>
                <td>
                    <label for="nAdultos">Adultos</label><br/>
                    <input type="number" name="adultos" id="nAdultos">
                </td>

                <td>
                    <label for="nNiños">Niños (menores 13 años)</label><br/>
                    <input type="number" name="niños" id="nNiños">
                </td>
            </tr>
        </table>
    </div> -->
    <!-- <div class="form_reserva">
        <form method="POST" action="" style="justify-content: center;">
            
                <label for="fechaEntrada">Fecha entrada</label>
                <input type="date" id="fechaEntrada">
           
                <label for="fechaSalida">Fecha Salida</label>
                <input type="date" id="fechaEntrada"><br/><br/>

                <label for="nAdultos">Adultos</label>
                <input type="number" name="adultos" id="nAdultos">

               
            
        </form>
    </div> -->

    <!-- FOOTER -->
    <!-- <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>© Copyright 2015 - All Rights Reserved</h5>
                    <p>All Rights Reserved.</p>
    </footer> -->

    <!-- <div class="container pepe"> -->
    <footer class="footer bg-secondary text-white">
        <div class="row footerPrincipal">
            <div class="col-md-3 contactoFooter">
                <h4>Contacto</h4>
                <div class="contenidoContacto">
                    <p>MADRID CALLE DEL PEPE BOTELLA</p>
                    <p>Teléfono: 916 535 482 </p>
                    <p>Correo electrónico: info@imperialretreat.com</p>
                    <form>
                        <button class="nav-link active" aria-current="page" name="btn_pagina_FQ">Preguntas frecuentes</button>
                    </form>
                </div>
                
            </div>

            <div class="col-md-4 ">
                <h4>Redes sociales</h4>
                <ul class="list-unstyled iconos">
                    <li><a href="#"><i class="fab fa-facebook fa-lg text-white"></i> Facebook</a>
                        <ion-icon name="logo-facebook" size="large"></ion-icon>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter fa-lg text-white"></i> Twitter</a>
                        <ion-icon name="logo-twitter" size="large"></ion-icon>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram fa-lg text-white"></i> Instagram</a>
                        <ion-icon name="logo-instagram" size="large"></ion-icon>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 ">
                <h4>Boletín informativo</h4>
                <p>Regístrate para recibir noticias y ofertas especiales</p>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo electrónico">
                    </div><br />
                    <button type="submit" class="btn btn-primary">Suscribirse</button>
                </form>
            </div>
        </div>
        <div class="footerLogo">
            <div class="col-md-4 "><br/><br/>
                <h6>© Copyright 2023 - All Rights Reserved</h6>
                <!-- <p>All Rights Reserved.</p> -->
            </div>
            <!-- <div class="col-md-3 logoEmpresa">
                  <img src="../img/logo3.png" alt="Imperial Retreat Logo" title="Imperial Retreat" width="80" height="80" />
                </div> -->
        </div>
    </footer>
    <!-- </div>                -->

    <!-- <br /><br /><br /><br />  -->

</body>

</html>