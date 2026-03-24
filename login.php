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


$nombre = $_POST["nombre"];

$password = $_POST["password"];

$sql = "SELECT idAlumno from alumnos WHERE nombre ='".$nombre."' AND password='".$password."'";
//Antes del query se hace siempre esto
$resultado = $conexion->query($sql);

if($fila = $resultado->fetch_array()){
	$_SESSION["idAlumno"] = $fila["idAlumno"];
	header("Location: inicio.html");
}else{
	header("Location: login.html");
}


$conexion->close();

?>

