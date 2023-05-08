<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">
    <link rel="stylesheet" type="text/css" href="galeria.css">
</head>


<body>
    <div>
        En el Imperial Retreat, todas nuestras habitaciones son un oasis de lujo y confort. 
        Ofrecemos tres tipos de habitaciones, cada una con su propia personalidad y características únicas. 
        Las habitaciones tipo Imperial son las más exclusivas, con una decoración majestuosa y comodidades de alta gama. 
        Las habitaciones tipo de lujo también son una experiencia de ensueño, con una elegante decoración y una amplia 
        variedad de servicios. Incluso nuestras habitaciones tipo común ofrecen un alto nivel de confort y calidad, con
         una decoración moderna y todas las comodidades necesarias para una estancia relajante. Todas nuestras habitaciones
          están diseñadas para brindar una experiencia inolvidable a nuestros huéspedes.
    </div>

    <div class="accordion" id="accordionExample">

      
            <div id="colapse2" class="accordion-collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Comienzo galeria de fotos -->
                    <h1>Presidencial</h1>
                    <div class="contenedor containerFotosHabitacionPresidencial">
                        <div class="item foto1"><img class="image" src="../img/habitaciones/hab_presidencial/foto1.jpg" data-src="../img/habitaciones/hab_presidencial/foto1.jpg"></div>
                        <div class="item foto2"><img src="../img/habitaciones/hab_presidencial/foto2.jpg"></div>
                        <div class="item foto3"><img src="../img/habitaciones/hab_presidencial/foto3.jpg"></div>
                        <div class="item foto4"><img src="../img/habitaciones/hab_presidencial/foto4.jpg"></div>
                        <div class="item foto5"><img src="../img/habitaciones/hab_presidencial/foto5.jpg"></div>
                        <div class="item foto6"><img src="../img/habitaciones/hab_presidencial/foto6.jpg"></div>
                        <div class="item foto7"><img src="../img/habitaciones/hab_presidencial/foto7.jpg"></div>
                        <div class="item foto8"><img src="../img/habitaciones/hab_presidencial/foto8.jpg"></div>
                        <div class="item foto9"><img src="../img/habitaciones/hab_presidencial/foto9.jpg"></div>
                        <div class="item foto10"><img src="../img/habitaciones/hab_presidencial/foto10.jpg"></div>
                    </div>

                    <br /><br /><br />
                    <h1>Lujo</h1>
                    <div class="contenedor containerFotosHabitacionLujo">
                        <div class="item foto1"><img src="../img/habitaciones/hab_lujo/foto1.jpg"></div>
                        <div class="item foto2"><img src="../img/habitaciones/hab_lujo/foto2.jpg"></div>
                        <div class="item foto3"><img src="../img/habitaciones/hab_lujo/foto3.jpg"></div>
                        <div class="item foto4"><img src="../img/habitaciones/hab_lujo/foto4.jpg"></div>
                        <div class="item foto5"><img src="../img/habitaciones/hab_lujo/foto5.jpg"></div>
                        <div class="item foto6"><img src="../img/habitaciones/hab_lujo/foto6.jpg"></div>
                        <div class="item foto7"><img src="../img/habitaciones/hab_lujo/foto7.jpg"></div>
                        <div class="item foto8"><img src="../img/habitaciones/hab_lujo/foto8.jpg"></div>
                    </div>

                    <br /><br /><br />
                    <h1>Comun</h1>
                    <div class="contenedor containerFotosHabitacionComun">
                        <div class="item foto1"><img src="../img/habitaciones/hab_comun/foto1.jpg"></div>
                        <div class="item foto2"><img src="../img/habitaciones/hab_comun/foto2.jpg"></div>
                        <div class="item foto3"><img src="../img/habitaciones/hab_comun/foto3.jpg"></div>
                        <div class="item foto4"><img src="../img/habitaciones/hab_comun/foto4.jpg"></div>
                        <div class="item foto5"><img src="../img/habitaciones/hab_comun/foto5.jpg"></div>
                    </div>
                    <!-- Fin galeria de fotos -->
                </div>
            
        </div>



    </div>
</body>
</html>
<script>
  const items = document.querySelectorAll('.image');

  items.forEach(item => {
    item.addEventListener('click', () => {
      const imageUrl = item.getAttribute('data-src');
      window.open(imageUrl, '_blank');
    });
  });
</script>