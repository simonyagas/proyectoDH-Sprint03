<?php
// <!-- Loader -->
require_once('loader.php');
// <!-- Loader -->
  if($_POST){
    $errores = validarLogin($_POST);
    if(count($errores)==0){
      $usuario = buscarPorEmail($_POST['email']);
      if($usuario==null){
        $errores['email']="Usuario no encontrado...";
      }else{
        //Desde aquí incio mi revisión a ver que ocurre con los contenidos de las variables y tratar de ver que ocurre
        //Aquí ví que el dato viene bien, es decir el password hasheado
        //dd($usuario['password']);
        //Ahora veo que trae esta variable  y noto que trae el dato correctamente
        //dd($_POST['password']);
        //Aquí estaba el error a la función password_verify, se le debe psar primero el dato no hasheado y luego el hasheado, ese fue mi error, lo habia pasado al contrario
        if(password_verify($_POST['password'],$usuario['password'])===false){
          $errores['password']="Datos inválidos...";
        }else{
          seteoUsuario($usuario,$_POST);
          if(validarUsuario()){
            header('location:user.php');
            exit;
          }else{
            header('location:login.php');
            exit;
          }
        }
      }
    }
  }

?>
<!-- Head de html -->
<?php
  require_once('styles.php');
  ?>
<!-- Head de html -->
      <!-- Codigo de css -->
      <link rel="stylesheet" href="css/login.css">
      <!-- Codigo de css -->
      <title>Recuperando contraseña</title>
      <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?> 
</head>
<body>
     <!-- Menu de navegacion -->
     <?php
		require_once('navbar.php');
	    ?>
    <!-- Menu de navegacion -->


<div class="container">
  <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
      <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
           <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body">

          <h5 class="card-title text-center">Cambiar pass</h5>
          <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?> 

          <form id="formularioOlvide"  class="formOlvide" name="formOlvide"     novalidate action=""  method="POST">
                      
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo" value= "<?=isset($errores['email'])? "":old('email') ;?>"
              </div>
          
              <div class="form-group">
                <label for="password">Ingrese una nueva contraseña</label>
                <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña">
              
                <small class="form-text text-muted">Al menos 6 caracteres, debe contenter sólo números</small>
              </div>
            
              <div class="form-group">
                <label for="password">Confirmar contraseña</label>
                <input required name="passwordRepeat" type="password" value= ""class="form-control" id="passwordRepeat" placeholder="Confirmar la contraseña">
              </div>
           
              <button type="submit" class="btn btn-primary">Cambiar contraseña</button>

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
