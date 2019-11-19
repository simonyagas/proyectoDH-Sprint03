<?php
class Usuario{
  private $username;
  private $email;
  private $password;
  private $role;
  private $imagen;
  private $passwordRepeat;

  public function __construct($email,$password,$username = null,$passwordRepeat = null ,$imagen = null){
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->imagen = $imagen;
    $this->passwordRepeat = $passwordRepeat;

  }

  //Getters

    public function getUsername(){
    return $this->username;
  }
  public function getRole(){
  return $this->role;
}
  public function getEmail(){
  return $this->email;
}
public function getPassword(){
return $this->password;
}

public function getImagen(){
return $this->imagen;
}
public function getPasswordRepeat(){
return $this->passwordRepeat;
}

  // Setters

    public function setUsername($username){
    $this->username = $username;
  }
  public function setEmail($email){
  $this->email = $email;
}
public function setPassword($password){
$this->password = $password;
}

public function setImagen($imagen){
$this->imagen = $imagen;
}
public function setPasswordRepeat(){
return $this->passwordRepeat = $passwordRepeat;
}

}
