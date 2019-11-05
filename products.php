<?php
require_once('controladores/funciones.php');
require_once('helpers.php');
require_once('arrayproductos.php');
?>
<!-- Menu de navegacion -->
<?php
  require_once('styles.php');
  ?>
<!-- Menu de navegacion -->

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
			<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
			<div class="price-wrap h5">
				<span class="price-new"><?=$value["pricenew"];?></span> <del class="price-old"><?=$value["priceold"];?></del>
			</div> <!-- price-wrap.// -->
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
