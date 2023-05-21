<?php 


class Conexion{

    static public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=php_cms_mvc","root","root");
        $link->exec("set names utf8mb4");
        return $link;
    }
}

?>