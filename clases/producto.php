<?php
class Producto{
  private $titulo;
  private $descp;
  private $precion;
  private $preciov;
  private $img;

  public function __construct($titulo, $descp, $precion,$preciov, $img){
    $this->titulo = $titulo;
    $this->descp = $descp;
    $this->precion = $precion;
    $this->preciov = $preiov;
    $this->img = $img;
  }

  //Getters

  public function getTitulo(){
    return $this->titulo;
  }
  public function getDescp(){
    return $this->descp;
  }
  public function getPrecion(){
    return $this->precion;
  }
  public function getPreciov(){
    return $this->preciov;
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
  public function setPrecion($precion){
    $this->titulo = $titulo;
  }
  public function setPreciov($preciov){
    $this->titulo = $titulo;
  }
    public function setImg($img){
    $this->titulo = $titulo;
  }
}
