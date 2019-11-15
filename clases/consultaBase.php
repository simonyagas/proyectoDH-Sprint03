<?php
require_once('loader.php');
class Consulta{
    public function listarProductos($productos,$bd){
        $sql = "select * from $productos";
        $query = $bd->prepare($sql);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $productos;
    }
    public function buscarProducto($bd,$productos,$busqueda){
      $sql = "select * from $productos where title like :busqueda";
      $query = $bd->prepare($sql);
      $query->bindValue(':busqueda',"%".$busqueda."%");
      $query->execute();
      $producto = $query->fetchAll(PDO::FETCH_ASSOC);
      return $producto;
  }
      // no entiendo que es la variable $products que dani programo como $movies, es el nombre de la tabla de la base de datos?(nacho)
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
   public function guardarUsuario($bd,$usuarios, $usuario,$avatar){

    $sql = "insert into $usuarios (usuario,email,password,avatar,role) value(:usuario,:email,:password,:avatar,:role)";
    $query = $bd->prepare($sql);

    $query->bindValue(':usuario',$usuario->getUsername());
    $query->bindValue(':email',$usuario->getEmail());
    $query->bindValue(':password',$usuario->getPassword());
    $query->bindValue(':avatar',$avatar);
    $query->bindValue(':role',1);

    $query->execute();
    header('location:index.php');
  }
   public function buscarRole($bd,$usuarios,$usuario){

$sql="select role from usuarios WHERE usuario like $usuario->getUsername";
   $query=$bd->prepare($sql);
$query->execute();
   }


}
