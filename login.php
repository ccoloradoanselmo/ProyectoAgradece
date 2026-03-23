<?php

require 'configdb.php';

//Primero conectamos con la BD
function conectar(){
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
}

//Antes de guardar nada, validamos que todo este correcto y que no pillemos correos o contraseñas invalidos (eso no lo hacemos todavia)
$nombre = $_POST["nombre"];

$password = $_POST["password"];


$sql = "SELECT idAlumno from alumnos WHERE nombre ='".$nombre."' AND password='".$password."'";
//Antes del query se hace siempre esto

//TAREA mostrar la consulta SQL
echo $sql;
echo '<br/>'

?>
