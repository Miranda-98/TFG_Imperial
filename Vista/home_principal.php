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


<body>
  
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
    <div style="display:flex; justify-content: center;">
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
    </div>
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

    

    <br /><br /><br /><br />

</body>

</html>
