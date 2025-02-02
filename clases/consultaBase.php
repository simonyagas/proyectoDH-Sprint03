<?php
require_once('loader.php');
class Consulta{

    public function listarProductos($bd,$productos){
        $sql = "select * from $productos";
        $query = $bd->prepare($sql);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $productos;
    }
    public function ValidadorProducto($producto){
        $errores = [];
        $titulo = trim($producto->getTitulo());
        if(empty($titulo)){
            $errores['titulo'] = "Campo requerido";
        }
        return $errores;
    }

    public function guardarProducto($bd,$productos, $producto){
     $sql = "insert into $productos (titulo, precio, descp, img) values (:titulo,:precio,:descp,:img)";
     $query = $bd->prepare($sql);
     $query->bindValue(':titulo',$producto->getTitulo());
     $query->bindValue(':precio',$producto->getPrecio());
     $query->bindValue(':descp',$producto->getDescp());
     $query->bindValue(':img',$producto->getImg());
     $query->execute();
     header('location:index.php');
   }

   //Este es el método que controla la busqueda de las productos
    public function buscarProducto($bd,$productos,$busqueda){
        $sql = "select * from $productos where title like :busqueda";
        $query = $bd->prepare($sql);
        $query->bindValue(':busqueda',"%".$busqueda."%");
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $productos;
    }
    //Este método controla el borrado de la productos que el usuario selecione
    public function borrarProducto($bd,$productos,$id){
        $sql = "delete from $productos where id = :id";
        $query = $bd->prepare($sql);
        $query->bindvalue(':id',$id);
        $query->execute();
    }
    //Método para realizar la edición o modificación de los datos de algun producto
    public function editarProducto($bd,$productos,$producto,$id){
        $sql = "update $productos set titulo=:titulo,precio=:precio,descp=:descp where $productos.id=$id";
        $query = $bd->prepare($sql);
        $query->bindValue(':titulo',$producto->getTitulo());
        $query->bindValue(':precio',$producto->getPrecio());
        $query->bindValue(':descp',$producto->getDescp());
        $query->bindValue(':img',$producto->getImg());
        $query->execute();
        header('location:index.php');
      }


   public function guardarUsuario($bd,$usuarios, $usuario,$avatar){

    $sql = "insert into $usuarios (usuario,email,password,avatar,role) value(:usuario,:email,:password,:avatar,:role)";
    $query = $bd->prepare($sql);

    $query->bindValue(':usuario',$usuario->getUsername());
    $query->bindValue(':email',$usuario->getEmail());
    $query->bindValue(':password',Encriptador::hashPassword($usuario->getPassword(),PASSWORD_DEFAULT));

    $query->bindValue(':avatar',$avatar);
    $query->bindValue(':role',1);

    $query->execute();
    header('location:index.php');
  }
   public function buscarRole($bd,$usuarios,$usuario){

     $sql="select role from usuarios WHERE usuario like $usuario->getEmail()";

     $query=$bd->prepare($sql);
      $query->execute();
  }
   public function buscarPorEmail($email, $pdo,$tabla){
       $sql = "select * from $tabla where email =:email";
       $query = $pdo->prepare($sql);
       $query -> bindValue(':email', $email);
       $query->execute();
       $usuario = $query->fetch(PDO::FETCH_ASSOC);
       return $usuario;
       dd($usuario);
  }

}
