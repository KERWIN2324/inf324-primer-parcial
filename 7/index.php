<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HAM-LP</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <br class="d-flex flex-column h-100">
        <br class="flex-shrink-0">

        <nav class="navbar navbar-expand-lg" style="background-image: url(imagenes/LOGO.png) ; height: 250px; background-position: center; background-repeat: no-repeat;">    </nav>


 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 40px;">
    <div class="container px-2">
    </div>
</nav>



<h1 class="fw-bolder" style="text-align: center; padding: 40px;" >FILTRAR POR DISTRITO Y ZONA</h1>

    <div class='table table-bordered' style='text-align: center;'>
     

    <label for="distrito" style="font-size: 25px;">SELECCIONA UN DISTRITO:</label>
    <select id="distrito" style="font-size: 19px; border: 2px solid #000; text-align: center;">
        <option value="">Seleccionar un Distrito</option>
    </select>

    <br><br>

    <label for="zona" style="font-size: 25px; " >SELECCIONA UNA ZONA:</label>
    <select id="zona" style="font-size: 19px; border: 2px solid #000; text-align: center; width: 205px;">
        <option value="" >Seleccionar una Zona</option>
    </select>

    <br><br>
    </div>

    <table  id="tabla-personas" class='table table-bordered' style='width: 1200px; margin-left: auto; margin-right: auto; border: 2px; text-align: center; vertical-align: middle;'>
        <thead>
            <tr>
                <th>CI</th>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'get_distritos.php',
                type: 'GET',
                success: function(data) {
                    $('#distrito').append(data);
                }
            });

            $('#distrito').change(function() {
                var distrito = $(this).val();
                if (distrito != "") {
                    $.ajax({
                        url: 'get_zonas.php',
                        type: 'GET',
                        data: { distrito: distrito },
                        success: function(data) {
                            $('#zona').html('<option value="">Selecciona Zona</option>');
                            $('#zona').append(data);
                        }
                    });
                }
            });

            $('#zona').change(function() {
                var zona = $(this).val();
                var distrito = $('#distrito').val();
                if (zona != "") {
                    $.ajax({
                        url: 'get_personas.php',
                        type: 'GET',
                        data: { distrito: distrito, zona: zona },
                        success: function(data) {
                            $('#tabla-personas tbody').html(data);
                        }
                    });
                }
            });
        });
    </script>

</br></br></br>

</main>
<footer class="bg-dark py-4 mt-auto" >
    <div class="container px-5" style="height: 120px; ">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row" >
            <div class="col-auto"><div class="small m-0 text-white">GOBIERNO AUTONOMO DE LA PAZ</div></div>
            <div class="col-auto">
                <a class="fs-5 px-2 link-light" href="https://es-la.facebook.com/"><i class="bi-twitter"></i></a>
                <a class="fs-5 px-2 link-light" href="https://es-la.facebook.com/"><i class="bi-facebook"></i></a>
                <a class="fs-5 px-2 link-light" href="https://es-la.facebook.com/"><i class="bi-linkedin"></i></a>
                <a class="fs-5 px-2 link-light" href="https://es-la.facebook.com/"><i class="bi-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html> 