<?php
//Primero conectamos con la BD

//Antes de guardar nada, validamos que todo este correcto y que no pillemos correos o contraseñas invalidos (eso no lo hacemos todavia)
$usuario = $_POST["usuario"];

$password = $_POST["password"];
$sql = "SELECT idAlumno from ALUMNO WHERE usuario ='".$usuario."' AND password='".$password."'";
//Antes del query se hace siempre esto

//TAREA mostrar la consulta SQL
echo $sql;
echo '<br/>'

?>
