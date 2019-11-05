<?php
require_once('controladores/funciones.php');
require_once('helpers.php');
require_once('arrayproductos.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <<!-- Codigo de boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Codigo de boostrap -->
    <!-- Codigo de fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <!-- Codigo de fuentes -->
    <!-- Codigo de fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="css/producto1.css">
</head>
  <body>
     <!-- Menu de navegacion -->
     <?php
		require_once('navbar.php');
	    ?>
    <!-- Menu de navegacion -->

    <div class="container">
        <a class="btn btn-light" href="products.html" role="button">Volver</a>
    </div>

	<div class="container">

		<div class="card">

			<div class="container-fliud">
				<div class="wrapper row">
          <?php foreach ($productos as $key => $value):?>
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">




						  <div class="tab-pane active" id="pic-1"><img src="img/<?=$value["imagen"];?>" /></div>
						  <div class="tab-pane" id="pic-2"><img src="img/<?=$value["imagen"];?>" /></div>
						  <div class="tab-pane" id="pic-3"><img src="img/<?=$value["imagen"];?>" /></div>

						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/<?=$value["imagen"];?>" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="img/<?=$value["imagen"];?>" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="img/<?=$value["imagen"];?>" /></a></li>

						</ul>

					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?=$value["titulo"];?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">23 reviews</span>
						</div>
						<p class="product-description"><?=$value["descp"];?></p>
						<h4 class="price">current price: <span><?=$value["pricenew"];?></span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(12 votes)</strong></p>
						<h5 class="sizes">IPHONE:
							<span class="size" data-toggle="tooltip" title="8">8</span>
							<span class="size" data-toggle="tooltip" title="X">X</span>
							<span class="size" data-toggle="tooltip" title="XR">XR</span>
							<span class="size" data-toggle="tooltip" title="XS">XS</span>
              <span class="size" data-toggle="tooltip" title="11">11</span>
              <span class="size" data-toggle="tooltip" title="11PRO">11P</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
          <?php endforeach ?>
				</div>
			</div>
		</div>

	</div>
<!-- Footer -->
<?php
 require_once('footer.php');
?>
<!-- Footer -->
  </body>
</html>
