<!-- Menu de navegacion -->
<?php require_once('loader.php');

  if (isset($_GET['busqueda'])) {
    $productos = $consulta->buscarProducto($bd,'productos',$_GET['busqueda']);
  }
?>
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
         <a href="index.php" class="navbar-brand">
             <img src="./img/logo.png" height="28" alt="CoolBrand">
         </a>
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav">
            <?php if($_SESSION):?>
               <?php if ( $_SESSION['role'] == 2):  ?>
                   <a href="index.php" class="nav-item nav-link active">Home</a>
                 <a href="products.php" class="nav-item nav-link">Productos</a>
                 <a href="faq.php" class="nav-item nav-link">FAQ</a>
                 <a href="user.php" class="nav-item nav-link">Perfil</a>
                 <a href="#footer" class="nav-item nav-link">Contacto</a>
                 <a href="user.php" class="nav-item nav-link text-danger font-weight-bolder">Hola Administrador <?=$_SESSION['usuario'] ?></a>
                 <a href="crudproductos.php" class="btn btn-warning">CRUD Productos</a>
                 <a href="sessiondestroy.php" class="nav-item nav-link">Cerrar sesion</a>
               <?php  elseif (isset($_SESSION['email'])): ?>
                 <a href="index.php" class="nav-item nav-link active">Home</a>
                 <a href="products.php" class="nav-item nav-link">Productos</a>
                 <a href="faq.php" class="nav-item nav-link">FAQ</a>
                 <a href="user.php" class="nav-item nav-link">Perfil</a>
                 <a href="#footer" class="nav-item nav-link">Contacto</a>
                 <a href="sessiondestroy.php" class="nav-item nav-link">Cerrar sesion</a>
                 <a href="user.php" class="nav-item nav-link text-danger font-weight-bolder">Hola <?=$_SESSION['usuario']?></a>
               <?php endif;?>
             <?php else :?>


                  <a href="index.php" class="nav-item nav-link active">Home</a>
                  <a href="products.php" class="nav-item nav-link">Productos</a>
                  <a href="faq.php" class="nav-item nav-link">FAQ</a>
                  <a href="register.php" class="nav-item nav-link">Register</a>
                  <a href="login.php" class="nav-item nav-link">Login</a>
                 <a href="user.php" class="nav-item nav-link">Perfil</a>
                 <a href="#footer" class="nav-item nav-link">Contacto</a>

             <?php endif ?>


             </div>

             <!--Este es formulario para que el usuario busque producto que desee-->
             <form class="form-inline ml-auto" action="" method="get">
                 <input type="text" class="form-control mr-sm-2" name="busqueda" placeholder="Buscar">
                 <button type="submit" class="btn btn-outline-light">dale!</button>
             </form>
         </div>
     </nav>
 <!-- Menu de navegacion -->
