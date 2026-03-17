<!DOCTYPE html>
<html class="body" lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="body">

    <div class="contenedor-login">
        <form class="caja-login" action="#">
            <h2 class="titulo-login">Enviar mensaje</h2>

            <!-- Campo Para: con select -->
            <label for="para">Para:</label>
            <select id="para" name="para"> 
			<!-- Se hara con un bucle While o For, se pondran tantos options como alumnos haya en la tabla Alumnos -->
			<!-- En el value, estara la variable que estara almacenando el nombre y apellido de cada alumno -->
			<!-- Gracias al bucle, podremos hacerlo de manera dinamica -->
			 <!-- <option value="$alumno">$alumno</option> -->
                <option value="">Selecciona destinatario</option>
                <option value="persona1">Persona 1</option>
                <option value="persona2">Persona 2</option>
                <option value="persona3">Persona 3</option>
            </select>

            <!-- Textarea -->
            <label for="mensaje">Mensaje:</label>
            <textarea class="textarea" id="mensaje" name="mensaje" rows="6" placeholder="Escribe tu mensaje aquí..." ></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
