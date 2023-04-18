<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Retreat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function changeLanguage(lang) {
            var select = document.querySelector('#google_translate_element select');
            select.value = lang;
            select.dispatchEvent(new Event('change'));
        }
    </script>



</head>
<?php
    session_start();
    if (isset($_SESSION['nom_Usuario'])) {
        $perfilUsuario = "<button name=perfil_usuario value='perfil_usuario'>" . $_SESSION['nom_Usuario'] . "</button> 
            <br> <button name=cerrar_usuario value='cerrar_usuario'>Cerrar sesión</button>";
    } else {
        $perfilUsuario = "<button class='nav-link' href='#' name=inicio_Sesion value='inicio_Sesion'>Iniciar Sesión</button>";
    }

?>

<body id="content">
    <button onclick="changeLanguage('es')">Español</button>
    <button onclick="changeLanguage('fr')">Français</button>
    <button onclick="changeLanguage('de')">Deutsch</button>


    <!-- BARRA DE NAVEGACION PRINCIPAL -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
        <!-- div icono-->
        <div>
            <a class="">
                <img src="../img/logo3.png" alt="Imperial Retreat Logo" title="Imperial Retreat" width="80" height="80" />
            </a>
        </div>

        <!-- div nombre-->
        <div>
            <a class="titulo">
                Imperial Retreat
            </a>
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

    </nav>

    <div id="google_translate_element"></div>

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
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Preguntas frecuentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Habitaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CARROUSEL  -->
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

    <br /><br /><br /><br />

    <!-- Formulario Reserva -->
    <div>
        <table
    </div>
    <!-- <div class="form_reserva">
        <form method="POST" action="" style="justify-content: center;">
            
                <label for="fechaEntrada">Fecha entrada</label>
                <input type="date" id="fechaEntrada">
           
                <label for="fechaSalida">Fecha Salida</label>
                <input type="date" id="fechaEntrada"><br/><br/>

                <label for="nAdultos">Adultos</label>
                <input type="number" name="adultos" id="nAdultos">

                <label for="nNiños">Niños (menores 13 años)</label>
                <input type="number" name="niños" id="nNiños">
            
        </form>
    </div> -->

    

    <br /><br /><br /><br />

</body>

</html>
<?php
    include '../Controlador/controlador_sesion.php';
?>