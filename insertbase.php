<?php

 $host = "localhost";
 $dbname = "testregistro";
 $username = "postgres";
 $pasword = "123456";

$conexion = pg_connect("host = $host dbname=$dbname user = $username password = $pasword");

$query = "INSERT INTO empleado(nombres, apellidos, id_empleado, username)
VALUES ('" . $_REQUEST['nombres'] . "',
        '" . $_REQUEST['apellidos'] . "',
        '" . $_REQUEST['id_empleado'] . "',
        '" . $_REQUEST['username'] . "')";

$consulta=pg_query($conexion, $query);
if ($consulta) {
  echo "Datos insertados correctamente";
} else {
  echo "Error al insertar datos";
}



