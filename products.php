<!-- Loader -->
<?php
require_once('loader.php');
if ($_GET && !empty(trim('busqueda'))){
    $productos = $consulta->buscarProductos($bd,'productos',$_GET['busqueda']);
  }else{
    $productos = $consulta->listarProductos($bd,'productos');
  } 

?>
<!-- Loader -->
<!-- Head de html -->
<?php
require_once('styles.php');
?>
<!-- Head de html -->
     <!-- Codigo de css -->
	 <link rel="stylesheet" href="css/products.css">
	 <!-- Codigo de css -->
    <title>Productos de la tienda</title>
</head>
<body>
<!-- Menu de navegacion -->
     <?php
require_once('navbar.php');
?>
<!-- Menu de navegacion -->
<br><br><br>
  <div class="container">

<br>  <h2 class="text-center">Nuestros productos <a href="http://bootstrap-ecommerce.com/"></a></h2>
<hr>

<table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($productos as $key => $value) :?>
            <tr>
              <td><?=$value['id'];?></td>
              <td><?=$value['titulo'];?></td>
			  <td><?=$value['precio'];?></td>
			  <td><?=$value['descp'];?></td>
			  <td><?=$value['img'];?></td>
              <!-- <td><a href="detallePelicula.php?id=<?=$value['id'];?>"><ion-icon name="eye"></ion-icon></a></td>
              <td><a href="editarPelicula.php?id=<?=$value['id'];?>"><ion-icon name="create"></ion-icon></a></td>
              <td><a href="borrarPelicula.php?id=<?=$value['id'];?>"><ion-icon name="trash"></ion-icon></td></a> -->
            </tr>

          <?php endforeach;?>
          <tr>

          </tr>
        </tbody>
      </table>

<br><br><br>
<!-- Footer -->
<?php
 require_once('footer.php');
?>
<!-- Footer -->


</body>
</html>
