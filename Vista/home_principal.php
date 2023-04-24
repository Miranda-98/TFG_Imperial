<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Retreat</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">
    <!-- <script src="script.js"></script>


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
    </script> -->



</head>


<body>

    <div class="container">
        <!-- CARROUSEL  -->
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/fotos/habitacion_naranja.jpeg" class="d-block w-100" alt="..." >
            </div>
            <div class="carousel-item">
                <img src="../img/fotos/comida.jpeg" class="d-block w-100" alt="..." >
            </div>
            <div class="carousel-item">
                <img src="../img/fotos/hawai.jpeg" class="d-block w-100 " alt="..." >
            </div>
            <div class="carousel-item">
                <img src="../img/fotos/restaurantete.jpeg" class="d-block w-100" alt="..." >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br /><br /><br /><br />

    <!-- Formulario Reserva -->
    <div style="display:flex; justify-content: center;">
        <table class="table-responsive">
            <tr>
                <td>
                    <label for="fechaEntrada">Fecha entrada</label><br />
                    <input type="date" id="fechaEntrada">
                </td>

                <td>
                    <label for="fechaSalida">Fecha Salida</label><br />
                    <input type="date" id="fechaEntrada">
                </td>
            </tr>


            <tr>
                <td>
                    <label for="nAdultos">Adultos</label><br />
                    <input type="number" name="adultos" id="nAdultos">
                </td>

                <td>
                    <label for="nNiños">Niños (menores 13 años)</label><br />
                    <input type="number" name="niños" id="nNiños">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" class="submi"
                </td>
            </tr>
        </table>
    </div>



    <!-- PIE -->

    <div class="containerPie">
        <!-- Restaurante -->
        <div id="carouselRestaurante">
            <div id="carouselRestauranteSlide" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner imgCarouselRestaurante">
                    <div class="carousel-item active">
                        <img src="../img/restaurante/foto1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/restaurante/foto2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/restaurante/foto3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/restaurante/foto4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/restaurante/foto5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/restaurante/foto6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/restaurante/foto7.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselRestauranteSlide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselRestauranteSlide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="descripcionRestaurante">
                <div>
                    Bienvenidos al restaurante de Imperial Retreat. Aquí podrá disfrutar de una experiencia gastronómica excepcional en un ambiente elegante y acogedor. Nuestro menú, cuidadosamente seleccionado por nuestro chef, ofrece una amplia variedad de platos de alta cocina con ingredientes frescos y de alta calidad, que se complementan perfectamente con nuestra selección de vinos finos de todo el mundo. Nuestro personal altamente capacitado lo atenderá con amabilidad y profesionalismo, mientras disfruta de una vista impresionante de la ciudad o del mar. En nuestro restaurante, su experiencia culinaria será inolvidable y lo dejaremos con ganas de volver.
                </div>
            </div>
        </div>

        <!-- Eventos -->
        <div id="carouselEventos">
            <div id="carouselEventosSlide" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner imgCarouselEventos">
                    <div class="carousel-item active">
                        <img src="../img/evento/jardin1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/evento/jardin2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/evento/sala1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/evento/sala2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/evento/sala3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/evento/sala4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselEventosSlide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselEventosSlide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="descripcionEventos">
                <div>
                    La Sala de Eventos del Imperial Retreat es el lugar perfecto para llevar a cabo eventos y reuniones de gran importancia. Con su imponente arquitectura, esta sala es un espacio elegante y sofisticado, diseñado para impresionar a los invitados más exigentes. Con una capacidad de hasta 500 personas, la Sala de Eventos cuenta con tecnología de última generación y un equipo de expertos en organización de eventos para asegurar que cada detalle sea perfecto. Además, sus amplios ventanales ofrecen vistas impresionantes al entorno natural que rodea al hotel, creando una atmósfera única y acogedora para cualquier tipo de evento. Ya sea una boda, una conferencia o una cena de gala, la Sala de Eventos del Imperial Retreat es la elección ideal para hacer de cualquier evento una ocasión memorable e inolvidable.
                </div>
            </div>
        </div>

        <!-- Spa -->
        <div id="carouselSpa">
            <div id="carouselSpaSlide" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner imgCarouselSpa">
                    <div class="carousel-item active">
                        <img src="../img/spa/foto1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/spa/foto2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/spa/foto3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/spa/foto4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/spa/foto5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSpaSlide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSpaSlide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="descripcionSpa">
                <div>
                    Bienvenido al Spa Imperial Retreat, donde la relajación y la renovación se unen en un ambiente lujoso y tranquilo. Nuestro spa ofrece una amplia variedad de tratamientos y servicios para satisfacer todas sus necesidades de bienestar. Desde masajes relajantes y faciales rejuvenecedores, hasta tratamientos corporales terapéuticos y servicios de peluquería y manicura, nuestro equipo altamente capacitado está aquí para brindarle una experiencia de spa inolvidable. Además, nuestro spa cuenta con instalaciones de última generación, como piscina climatizada, sauna, baño turco y sala de fitness, para asegurarnos de que su visita sea completa. Permítanos guiarlo en un viaje de relajación y revitalización en nuestro spa de clase mundial.
                </div>
            </div>
        </div>

    </div>

    <br /><br />




    <br /><br /><br /><br />
    </div>
    

</body>

</html>