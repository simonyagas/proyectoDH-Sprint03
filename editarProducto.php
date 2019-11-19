<!-- Loader -->
<?php
require_once('loader.php');
?>
<?php
  if($_POST){
    //Esto se ejecuta univcamente cuando el usuario acciona el boton de Actualizar productos  
    $productos = new producto($_POST['titulo'],$_POST['precio'],$_POST['descp']);
    $errores = $validar->ValidadorProducto($productos);
    
    if(count($errores) == 0){
      $consulta->editarProducto($bd,'productos',$productos,$_GET['id']);
    }
  }

  //En la variable $productos incorporo los datos de la productos que el usuario desea modificar
  $productos = $consulta->editarProducto($bd,'productos',$_GET['id']);
  
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

<h2 class="text-center">Editar Producto</h2>
       <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="nombreProducto">Nombre</label>
                        <input type="text" class="form-control" name="title" id="nombre" value="<?= $productos['titulo']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" name="precio" id="precio" value="<?= $productos['precio']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="descp">Descripcion</label>
                        <input type="text" class="form-control" name="descp" id="descp" value="<?= $productos['descp']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar productos</button>
                </form>
                <a href="index.php" class="btn btn-danger">Volver</a>
            </div>
        </div>


<!-- Footer -->
<?php
 require_once('footer.php');
?>
<!-- Footer -->


    </body>

</html>