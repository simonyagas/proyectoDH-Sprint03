<?php
require_once('loader.php');
?>

<!-- Menu de navegacion -->
  <?php
  require_once('styles.php');
  ?>
<!-- Menu de navegacion -->
<!-- Codigo de css -->
 <link rel="stylesheet" href="./css/index.css">
<!-- Codigo de css -->
  <title>Agregar Productos</title>
</head>
<body>
<!-- Menu de navegacion -->
  <?php
  require_once('navbar.php');
  ?>
<!-- Menu de navegacion -->
        <div class="spacer"></div>
        <h2 class="text-center">Agregar Película</h2>
       <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="nombrePelicula">Nombre</label>
                        <input type="text" class="form-control" name="title" id="nombrePelicula">
                    </div>
                    <div class="form-group">
                        <label for="ratingPelicula">Rating</label>
                        <input type="number" class="form-control" name="rating" id="ratingPelicula">
                    </div>
                    <div class="form-group">
                        <label for="awards">Awards</label>
                        <input type="number" class="form-control" name="awards" id="awards">
                    </div>
                    <div class="form-group">
                        <label for="release-date">Release Date</label>
                        <input type="date" class="form-control" name="release_date" id="release-date">
                    </div>
                    <div class="form-group">
                        <label for="duracionPelicula">Duración</label>
                        <input type="number" class="form-control" name="length" id="duracionPelicula">
                    </div>
                    <div class="form-group">
                        <label for="generos">Género de la Película</label>
                        <select class="form-control" name="genre_id" id="generos">
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Película</button>
                </form>
                <a href="index.php" class="btn btn-danger">Volver</a>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
