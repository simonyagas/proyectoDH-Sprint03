<?php
class BaseMysql{
    static public function conexion(){
        try {
            $dsn = "mysql:host=localhost;dbname=cuerdas_db;port=3306;charset=utf8mb4";
            $usuario = "root";
            $password = "";
            $bd = new PDO($dsn,$usuario,$password);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bd;
            header('location:index.php');

        } catch (PDOException $error) {
            echo "<h2>No me pude conectar con la Base de Datos...<br></h2>".$error->getMessage();
            exit;
        }
    }


}
