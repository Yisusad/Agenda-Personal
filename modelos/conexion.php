<?php

class Conexion{ 
    public static function conectar()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=agenta-contactos', 'root', '');
        $pdo->exec("set names utf8"); //evitar problemas con caracteres especiales();
        return $pdo;
        echo "conectado";
    }
}
