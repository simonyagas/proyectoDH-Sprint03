<?php

require_once('loader.php');

class Validador{
  public function ValidadorProducto($producto){
    $errores = [];
    $titulo = trim($producto->getTitulo());
    if (empty($titulo)){
      $errores['titulo'] = "Falta el titulo";
    }
    $descp = trim($descp->getDescp());
    if (empty($descp)){
      $errores['descp'] = "Falta la descripcion del producto";
    }
    $precio = trim($precio->getPrecio());
    if (empty($precio)){
      $errores['precio'] = "Falta el precio del producto";
    }
    if(isset($_FILES)){
        $avatar= $producto->getImg();
         //dd($avatar['avatar']['name']);
        $nombre = $avatar['avatar']['name'];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($avatar['avatar']['error']!=0){
            $errores['avatar']="Subi una foto de perfil, dale que sos hermos@";

        }elseif ($ext != "jpg" && $ext != "png") {
            $errores['avatar']="Solo imagenes, creo que subiste otra cosa";
        }
    }
    return $errores;
  }
  public function validarUsuario($usuario){
    $errores = [];
    $username = trim($usuario->getUsername());
    if(empty($username )){
        $errores['username']="Completar campo nombre";
    }
    $email = trim($usuario->getEmail());
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email invalido";
    }
    $password = trim($usuario->getPassword());
    if(empty($password)){
        $errores['password']="Te olvidaste de escribir la contraseña";
    }elseif (!is_numeric($password)) {
        $errores['password']="Solo aceptamos numeros";
    }elseif (strlen($password)<6) {
        $errores['password']="Minimo 6 caracteres en la contraseña";
    }
    $passwordRepeat = trim($usuario->getPasswordRepeat());
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Pusiste 2 contraseñas diferentes, chequealo";
    }
          $password = Encriptador::hashPassword($usuario->getPassword(),PASSWORD_DEFAULT);
    if(isset($_FILES)){
        $avatar= $usuario->getImagen();
         //dd($avatar['avatar']['name']);
        $nombre = $avatar['avatar']['name'];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($avatar['avatar']['error']!=0){
            $errores['avatar']="Subi una foto de perfil, dale que sos hermos@";

        }elseif ($ext != "jpg" && $ext != "png") {
            $errores['avatar']="Solo imagenes, creo que subiste otra cosa";
        }
    }


    return $errores;
    }
    //Esta función se encarga de validad los datos que el usuario coloca en el formulario de Login
    public function validarLogin($usuario){
        $errores=[];
        $email = trim($usuario->getEmail());
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errores['email']="Email inválido...";
        }
        $password = trim($usuario->getPassword());
        if(empty($password)){
            $errores['password']="El password no puede ser blanco...";
        }elseif (!is_numeric($password)) {
            $errores['password']="El password debe ser numérico...";
        }elseif (strlen($password)<6) {
            $errores['password']="El password como mínimo debe tener 6 caracteres...";
        }
        return $errores;
  }
  public function verificarPassword($password, $passwordHash){
    return password_verify($password,$passwordHash);
  }
  public function seteoSesion($user){
    $_SESSION[""]
  }
}
