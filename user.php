<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');
  //Esto lo incorporé, ya que por medio de esto logro hacer que si un usuario no está logueado en mi sistema y quiere entrar colocando la URL en el browser yo no se lo permito, hago que necesariamente se debe loguear
  if(!isset($_SESSION["email"])) {
    header("location:login.php");
    exit;
}
?>
<html>
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
    <!-- Codigo de fontawesome -->
    <!-- Codigo de css -->
    <link rel="stylesheet" href="css/user.css">
    <!-- Codigo de css -->
    <title>Perfil de Usuario</title>
</head>
<body>
<!-- Menu de navegacion -->
<?php
 require_once('navbar.php');
?>
<!-- Menu de navegacion -->
  <div class="container emp-profile">
    <form method="post">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">
            <img src= "imagenes/<?=$_SESSION['avatar']?>" alt="">
          <div class="file btn btn-lg btn-primary">
            Cambiar foto
            <input type="file" name="file"/>
          </div>
          </div>
        </div>

    <div class="col-md-6">
      <div class="profile-head">
          <h5><?=$_SESSION['nombre']?></h5>
          <h6>Usuario Cuerdas BA </h6>

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre</a>
            </li>
          </ul>
      </div>
    </div>
    <div class="col-md-2">
      <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
    </div>

    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="profile-work">
          <p>Acerca mio</p>
          <a href=""> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a><br/>
        </div>
      </div>

    <div class="col-md-8">
      <div class="tab-content profile-tab" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="col-md-6">
              <label>Usuario</label>
            </div>
    <div class="col-md-6">
      <p><?=$_SESSION['nombre']?></p>
    </div>
          </div>
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
       <label>Email</label>
      </div>
     <div class="col-md-6">
      <p><?=$_SESSION['email']?></p>
     </div>
    </div>
    <div class="row">
      <div class="col-md-6">
       <label>Telefono</label>
      </div>
     <div class="col-md-6">
       <p>123 456 7890</p>
     </div>
    </div>

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
