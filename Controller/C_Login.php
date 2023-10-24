<?php
  require("../Model/Conexion.php");
  if (isset($_POST["iniciar"])){
    if(strlen($_POST["dni"]) > 0 && strlen($_POST["contraseña"]) > 0){
      $dni = trim($_POST["dni"]);
      $contraseña = trim($_POST["contraseña"]);
      //CONSULTA
      $sql = "SELECT * FROM `registro` WHERE dni = $dni and contraseña = $contraseña";
      $resultado = mysqli_query($conex,$sql);
      $registros = mysqli_num_rows($resultado);
      if($registros !=0){
        $resolucion = "Logeo exitoso";
      }else{
        header("Location:../index.php");
      }
      require("../login.php");
    }else{
      header("Location:../index.php");
    }
  }
?>