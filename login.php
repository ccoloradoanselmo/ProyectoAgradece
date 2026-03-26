<?php
session_start();
require 'configdb.php';

//Primero conectamos con la BD
function conectar(){
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
}

//Antes de guardar nada, validamos que todo este correcto y que no pillemos correos o contraseñas invalidos (eso no lo hacemos todavia)

$conexion = conectar();  


$usuario = $_POST["usuario"];

$password = $_POST["password"];

$sql = "SELECT equipo from alumnos WHERE usuario ='".$usuario."' AND password='".$password."'";
//Antes del query se hace siempre esto
$resultado = $conexion->query($sql);

if($fila = $resultado->fetch_array()){
	$_SESSION["equipo"] = $fila["equipo"];
	header("Location: inicio.html");
}else{
	header("Location: login.html");
}


$conexion->close();

?>

