<?php
require_once('controladores/funciones.php');
require_once('clases/consultaBase.php');
require_once('clases/producto.php');
require_once('clases/validador.php');
require_once('clases/mysql.php');
require_once('clases/usuario.php');
require_once('clases/encriptador');

$bd = BaseMysql::conexion();

$consulta = new Consulta();
$validar = new Validador();

// de acaba para abajo para mi no va en POO en el loeader(nacho)



//Esta función me ayuda para la persistencia de los datos en el formulario, sólo si los datos dispuestos por el usuario estan correctos, es decir si ese campo pasa nuestras validaciones
function old($dato){
    if(isset($_POST[$dato])){
        return $_POST[$dato];
    }
}

//Esta función simula a la función (dd), de Laravel la cual simplemente es un dump and die (var_dump)

function dd($dato){
    echo "<pre>";
        var_dump($dato);
        exit;
    echo "</pre>";
}
