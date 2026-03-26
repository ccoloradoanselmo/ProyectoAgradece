<?php
require 'configdb.php';
session_start();
function conectar(){
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8"); 
    return $conexion;
}
$conexion = conectar();
$mensaje = $_POST["mensaje"];
$emisor = $_SESSION["equipo"];
$receptor = $_POST["equipo"];
$sql = "INSERT INTO agradecimientos (mensaje, idEmisor, idReceptor) 
        VALUES ('".$mensaje."', '".$emisor."', '".$receptor."')";
if ($conexion->query($sql))
    $switch = 1;
else
    $switch = 0;
$conexion->close();
?>
<!DOCTYPE html>
<html lang="es" class="body">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradece en Compañía</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body >
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

    <<div class="contenido-principal">
    <div class="caja-info">
        <?php if ($switch == 1): ?>
            <h2>¡Mensaje enviado!</h2>
            <p><b>De:</b> <?php echo $emisor; ?></p>
            <p><b>Para:</b> <?php echo $receptor; ?></p>
            <p><b>Mensaje:</b> <?php echo $mensaje; ?></p>
        <?php else: ?>
            <h2>Error al enviar</h2>
            <p>No se ha podido guardar el mensaje. Inténtalo de nuevo.</p>
        <?php endif; ?>
        <br>
        <a href="./agradecer.php">← Volver</a>
    </div>
</div>
</div>
</body>
</html>