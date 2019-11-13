<?php
class Producto{
  private $titulo;
  private $descp;
  private $precio;
  private $preciov;
  private $img;

  public function __construct($titulo, $descp, $precio, $img){
    $this->titulo = $titulo;
    $this->descp = $descp;
    $this->precion = $precio;
    $this->img = $img;
  }

  //Getters

  public function getTitulo(){
    return $this->titulo;
  }
  public function getDescp(){
    return $this->descp;
  }
  public function getPrecio(){
    return $this->precio;
  }
    public function getImg(){
    return $this->img;
  }

  // Setters

  public function setTitulo($titulo){
    $this->titulo = $titulo;
  }
  public function setDescp($descp){
    $this->titulo = $titulo;
  }
  public function setPrecio($precio){
    $this->titulo = $titulo;
  }
    public function setImg($img){
    $this->titulo = $titulo;
  }
}
