<?php
  require("Conexion.php");
  if (isset($_POST["iniciar"])){
    if(strlen($_POST["dni"]) >= 1 && strlen($_POST["contraseña"]) >= 1){
      $dni = trim($_POST["dni"]);
      $contraseña = trim($_POST["contraseña"]);
      //CONSULTA
      $sql = "SELECT * FROM `registro` WHERE dni = $dni and contraseña = $contraseña";
      $resultado = mysqli_query($conex,$sql);
      $registros = mysqli_num_rows($resultado);
      if($registros !=0){
        echo "Logeo exitoso";
      }else{
        echo "Usuario no existe";
      }
    }
  }
?>