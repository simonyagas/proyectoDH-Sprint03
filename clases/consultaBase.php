<?php
class Consulta{
    public function listarProductos($productos,$bd){
        $sql = "select * from $productos";
        $query = $bd->prepare($sql);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $productos;
    }


}