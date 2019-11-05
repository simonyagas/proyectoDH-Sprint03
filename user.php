<?php
require_once('loader.php');
  //Esto lo incorporé, ya que por medio de esto logro hacer que si un usuario no está logueado en mi sistema y quiere entrar colocando la URL en el browser yo no se lo permito, hago que necesariamente se debe loguear
  if(!isset($_SESSION["email"])) {
    header("location:login.php");
    exit;
}
?>
<!-- Menu de navegacion -->
<?php
  require_once('styles.php');
  ?>
<!-- Menu de navegacion -->
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
