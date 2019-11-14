<?php
class Validador{
  public function ValidadorProducto($producto){
    $errores = [];
    $titulo = trim($producto->getTitulo());
    if (empty($titulo)){
      $errores['titulo'] = "Falta el titulo";
    }
    $titulo = trim($descp->getDescp());
    if (empty($descp)){
      $errores['descp'] = "Falta la descripcion del producto";
    }
    $titulo = trim($precion->getPrecio());
    if (empty($precio)){
      $errores['precio'] = "Falta el precio del producto";
    }
    $titulo = trim($img->getImg());
    if (empty($img)){
      $errores['img'] = "Falta la imagen del producto";
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
        $errores['passwordRepeat']="Pusiste 2 contraseñas diferentes, chekealo";
    }
          $password = Encriptador::hashPassword($usuario->getPassword(),PASSWORD_DEFAULT),
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
  }
