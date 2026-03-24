<?php
session_start();
require 'configdb.php';

// Función de conexión
function conectar(){
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
}

// Función para mostrar alumnos
function mostrar_alumnos(){ 
    $conexion = conectar();  


    $sql = "SELECT * FROM alumnos";
    $resultado = $conexion->query($sql);    

   

    while($fila = $resultado->fetch_array()){
        echo '<option value="'.$fila["idAlumno"].'">'.$fila["nombre"].' - '.$fila["idAlumno"].'</option>';
    }



/*
    
*/

    // PRUEBA 1: repetir 3 veces fetch_array
    /*for($i = 0; $i < 3; $i++){
        $fila = $resultado->fetch_array();

        
            echo "<p>";
            echo "Nombre: " . $fila["nombre"];
            echo "<br>";
            echo "idAlumno: " . $fila["idAlumno"];
            echo "<br>";
            //echo "Edad: " . $fila["edad"];
            
            echo "</p>";
        
    }
*/
    $conexion->close();
}
?>

<!DOCTYPE html class="body">
<html class="body" lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje</title>
    <link rel="stylesheet" href="estilos.css">
    
        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="body">
    <!-- HEADER -->
    <header class="barra-superior">

        <div class="logo">
            <a href="inicio.html">
                <img src="./Imagenes/logo-jesuitas.svg" alt="Jesuitas">
            </a>
        </div>

        <nav class="menu">
            <a href="./agradecer.php">Agradecer</a>
            <a href="#">Recibir</a>
            <a href="./logout.php">Cerrar sesión</a>
        </nav>

    </header>
    <div class="contenedor-login">
        <form class="caja-login" action="mensaje.php" method="POST">
            <h2 class="titulo-login">Enviar mensaje</h2>
            <!-- Campo Para: con select --> 
            <b><label class="titulo-izquierda" for="idAlumno">Para:</label></b>
            <select class="select-izq" id="idAlumno" name="idAlumno">
                <?php
                    mostrar_alumnos();
                ?>
            </select>
            <br>
            <br>
            <!-- Textarea -->
            <b><label class="titulo-izquierda" for="mensaje">Mensaje:</label></b>
            <br>
            <br>
            <textarea class="textarea" id="mensaje" name="mensaje" rows="6" placeholder="Escribe tu mensaje aquí..." ></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
