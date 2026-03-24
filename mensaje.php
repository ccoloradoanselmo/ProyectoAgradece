<?php

session_start();

$mensaje = $_POST["mensaje"];
$emisor = $_SESSION["idAlumno"];
$receptor = $_POST["nombre"];


?>


<!DOCTYPE html>
<html lang="en" class="body">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradece en Compañia</title>
    <link rel="stylesheet" href="estilos.css">

        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
 <header class="barra-superior">

        <div class="logo">
            <a href="inicio.html">
                <img src="./Imagenes/logo-jesuitas.svg" alt="Jesuitas">
            </a>
        </div>

        <nav class="menu">
            <a href="./agradecer.php">Agradecer</a>
            <a href="#">Recibir</a>
            <a href="./index.html">Cerrar sesión</a>
        </nav>

    </header>
    <div class="contenido-principal">
	<?php
		echo "idEmisor: $emisor<br>";
		echo "Receptor: $receptor<br>";
		echo "Mensaje:\n$mensaje\n";
	?>
	</div>
	<br>
	<div class="contenido-principal">
	<h2> <a href="./agradecer.php"> Volver </a> </h2>
	</div>
</body>
</html>