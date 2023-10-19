<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "tripley";
$conex = new mysqli($server, $user, $pass, $db);
/* Verificar conexión
if ($conex->connect_errno) {
    die("Conexión fallida: " . $conex->connect_error);
} else {
    echo "Conectado";
}*/
?>