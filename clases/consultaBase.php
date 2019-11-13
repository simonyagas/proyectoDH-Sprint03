<?php
class Consulta{
    public function listarProductos($productos,$bd){
        $sql = "select * from $productos";
        $query = $bd->prepare($sql);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $productos;
    }
      // no entiendo que es la variable $products que dani programo como $movies, es el nombre de la tabla de la base de datos?(nacho)
    public function guardarProducto($bd,$productos, $producto){
     $sql = "inser into $productos (titulo, descp, precion,preciov, img) values (:titulo,:descp,:precion,:preciov,:img)";
     $query = $bd->prepare($sql);
     $query->bindValue(':titulo',$producto->getTitulo());
     $query->bindValue(':descp',$producto->getDescp());
     $query->bindValue(':precion',$producto->getPrecion());
     $query->bindValue(':preciov',$producto->getPreciov());
     $query->bindValue(':img',$producto->getImg());
     $query->execute();
     header('location:index.php');
   }
   public function guardarUsuario($bd,$usuarios, $usuario){
    $sql = "inser into $usuarios (username,email,password,passwordRepeat,imagen)";
    $query = $bd->prepare($sql);
    $query->bindValue(':username',$username->getUsername());
    $query->bindValue(':email',$email->getEmail());
    $query->bindValue(':password',$password->getPassword());
    $query->bindValue(':passwordRepeat',$passwordRepeat->getPasswordRepeat());
    $query->bindValue(':imagen',$imagen->getImagen());
    $query->execute();
    header('location:index.php');
  }
}
