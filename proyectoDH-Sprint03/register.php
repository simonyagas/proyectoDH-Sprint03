<?php
  //Esto debo hacerlo, para lograr que este programa logré visualizar las funciones creadas y de esa forma poder usarlas cuando desee.
  require_once("controladores/funciones.php");
  require_once("helpers.php");
  if($_POST){

    $errores = validar($_POST,$_FILES);
   if(count($errores)==0){
     $avatar = armarAvatar($_FILES);
     $registro = armarRegistro($_POST,$avatar);
     guardarRegistro($registro);

     //De n o excistir errores en la información tipeada por el usuario entonces lo redirecciono a donde yo desee.
     header("location:login.php");
   }
  }
?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <title>Registro</title>
          <!-- Codigo de boostrap -->
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
          <link rel="stylesheet" href="css/register.css">
          <!-- Codigo de css -->
     </head>
     <body>

<!-- Menu de navegacion -->
<?php
 require_once('navbar.php');
?>
<!-- Menu de navegacion -->
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
           <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Register</h5>
          <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?>

            <form id="formulario"  class="form-signin" name="formRegistro"     novalidate action=""  method="POST" enctype="multipart/form-data" >

            <div class="form-label-group">

            <input name="userName" type="text" id="inputUserame" value= "<?=isset($errores['username'])? "":old('userName') ;?>" class="form-control" id="userName" placeholder="Nombre de usuario" required autofocus >
            <div>
                <!--Aquí les comparto este otro código donde pueden mostrar el error en el mismo lugar donde se produjo, usted decide como desea mostrar los errores-->
                <?php if(isset($errores['userName'])):?>
                  <h6 class="text-danger"><?= $errores['userName'];?></h6>
                <?php endif;?>
              </div>

            </div>

            <div class="form-label-group">
            <input required name="email" type="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo" required value= "<?=isset($errores['email'])? "":old('email') ;?>">
            <label for="email">Email address</label>
            </div>


            <hr>

            <div class="form-label-group">
            <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Password">
              <label for="password">Password</label>
            </div>

            <div class="form-label-group">
                <label for="passwordRepeat">Repetir password</label>
                <input required name="passwordRepeat" type="password" value= ""class="form-control" id="passwordRepeat" placeholder="">
                <small class="form-text text-muted">Al menos 6 caracteres, debe contenter sólo números</small>
            </div>

              <div class="form-label-group">
                <label for="avatar">Avatar</label> <br> <br>
                <input required name="avatar" type="file" value= "" class="form-control" id="avatar" >
              </div>


            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
            <a class="d-block text-center mt-2 small" href="login.php">Ya tengo cuenta</a>
            <hr class="my-4">
            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
          </form>
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

         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </body>
     </html>
