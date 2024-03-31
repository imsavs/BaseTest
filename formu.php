<?php

if(isset($_POST['submit'])){
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $id_empleado = $_POST['id_empleado'];
    $username = $_POST['username'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Empleado</title>
  <link rel="stylesheet" href="style.css">
  
  
</head>
<header>
    <h1>Caja de Ahorro</h1>
  </header>
  
<body>
  <?php
  include_once("conbase.php");  
  DBConex::ConexBD();
  ?>
  <div class="contenedor">
    <h1>Registro de Empleado</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" id = "forminsert">
      <label for="nombres">Nombres:</label>
      <input type="text" id="nombres" name="nombres" ><span class="barra"></span>


      <label for="apellidos">Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos" ><span class="barra"></span>


      <label for="id_empleado">Cedula:</label>
      <input type="text" id="id_empleado" name="id_empleado" ><span class="barra"></span>

      
      <label for="username">Nombre de Usuario:</label>
      <input type="text" id="username" name="username" ><span class="barra"></span>


      <input type="submit" value="Registrar" name="submit">
      <p class="warnings" id="warnings"></p>
      <?php
      include("validar-form.php");
      ?>
    </form>
    
  </div>
  <script src="index.js"></script>
</body>
</html>