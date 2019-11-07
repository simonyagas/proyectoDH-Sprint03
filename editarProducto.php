<!-- Loader -->
<?php
require_once('loader.php');
?>
<!-- Loader -->
<!-- Head de html -->
  <?php
  require_once('styles.php');
  ?>
<!-- Head de html -->
<!-- Codigo de css -->
 <link rel="stylesheet" href="./css/editarProducto.css">
<!-- Codigo de css -->
  <title>Modificar Producto</title>
</head>
<body>
<!-- Menu de navegacion -->
  <?php
  require_once('navbar.php');
  ?>
<!-- Menu de navegacion -->

        <h2 class="text-center">Modificar Producto <br> <ion-icon name="git-compare"></ion-icon></h2>
       <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="nombrePelicula">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombreProducto">
                    </div>
                    <div class="form-group">
                        <label for="nombrePelicula">Imagen</label>
                        <input type="text" class="form-control" name="imagen" id="imgProducto">
                    </div>
                    <div class="form-group">
                        <label for="awards">Descripción</label>
                        <input type="text" class="form-control" name="descp" id="descripcionProducto">
                    </div>
                    <div class="form-group">
                        <label for="nombrePelicula">Precio nuevo</label>
                        <input type="number" class="form-control" name="precion" id="precioNuevo">
                    </div>
                    <div class="form-group">
                        <label for="nombrePelicula">Precio viejo</label>
                        <input type="number" class="form-control" name="preciov" id="precioViejo">
                    </div>

                    <button type="submit" class="btn btn-primary">Editar Producto</button>
                    <br>
                    <br>
                </form>
                <a href="crudproductos.php" class="btn btn-dark">Volver</a>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <?php
         require_once('footer.php');
        ?>


    </body>

</html>
