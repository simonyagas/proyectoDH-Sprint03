<?php
require_once('controladores/funciones.php');
require_once('arrayproductos.php');

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