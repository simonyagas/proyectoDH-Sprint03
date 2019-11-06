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
	 <link rel="stylesheet" href="css/crudproducts.css">
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

<br>  <h2 class="text-center">Edición de Productos <a href="http://bootstrap-ecommerce.com/"><ion-icon name="construct"></ion-icon></a></h2>
<hr>

<h3>Agregar Producto <a href="agregarProducto.php"><ion-icon name="add"></ion-icon></a> </h3>




<div class="row">
  <?php foreach ($productos as $key => $value):?>
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="img/<?=$value["imagen"];?>"/></div>
		<figcaption class="info-wrap">
				<h4 class="title"> <a href="productos.php" class="nav-item nav-link"><?=$value["titulo"];?></a></h4>
				<p class="desc"><?=$value["descp"];?></p>
				<div class="rating-wrap">
					<div class="label-rating"><?=$value["rating"][0];?></div>
					<div class="label-rating"><?=$value["rating"][1];?></div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
			<div class="price-wrap h5">
				<span class="price-new"><?=$value["pricenew"];?></span> <del class="price-old"><?=$value["priceold"];?></del>
			</div> <!-- price-wrap.// -->
      <div class="crud">
        <a href="editarProducto.php"><ion-icon name="create"></ion-icon></a>
        <a href=""><ion-icon name="trash"></ion-icon></a>
      </div>
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
<?php endforeach ?>
</div> <!-- row.// -->



</div>
<!--container.//-->

<br><br><br>
<!-- Footer -->
<?php
 require_once('footer.php');
?>
<!-- Footer -->


</body>
</html>
