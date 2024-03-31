<?php
include_once 'formu.php';

class DBConex{

    static function ConexBD(){
    $host = "localhost";
    $dbname = "testregistro";
    $username = "postgres";
    $pasword = "123456";

    try {
        $conn = new PDO ("pgsql:host=$host; dbname=$dbname", $username, $pasword);
        echo "Se conectó a la base de datos";
    }
    catch ( PDOException $si){
        echo ("No se pudo conectar a la base de datos, $si");
    }

    return $conn;

    
}

}


