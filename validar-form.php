<?php    
    if(isset($_POST['submit'])){
    if(empty($nombres)){
        echo "<p class='warnings'>* Agrega tu nombre</p>";
    }
    
    if (!preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]{2}\s[a-zA-ZñÑáéíóúÁÉÍÓÚ]{2,}$/', $nombres)) {
       echo "<p class ='warnings'> *El campo Nombres debe contener al menos dos nombres separados por un espacio.</p>";
      }    
 

    if(empty($apellidos)){
        echo "<p class='warnings'>* Agrega tu apellido</p>";

    }
    
    if (!preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]{2}\s[a-zA-ZñÑáéíóúÁÉÍÓÚ]{2,}$/', $apellidos)) {
        echo "<p class ='warnings'> *El campo Apellidos debe contener al menos dos apellidos separados por un espacio.</p>";
       }

    if(empty($id_empleado)){
        echo "<p class='warnings'>* Agrega tu cedula</p>";

    }
    
    if(!is_numeric($id_empleado)){
        echo "<p class='warnings'>* La cedula debe contener solo números</p>";
    }

    if (!preg_match('/^\d{1,8}$/', $id_empleado)) {
        echo "<p class='warnings'>*La cedula solo debe contener números y máximo 8 caracteres.</p>";
      }

    if(empty($username)){
        echo "<p class='warnings'>* Agrega tu nombre de usuario</p>";
    }

    if (!preg_match('/^[a-zA-Z0-9-_]{4,16}$/', $username)) {
        echo "<p class='warnings'>* El 'Nombre de usuario' solo debe contener letras, números y guiones bajos y contener
        entre 4-16 caracteres).</p>";
      }

      var_dump($_POST);
    
}