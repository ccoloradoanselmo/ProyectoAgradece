<?php
session_start();
session_destroy();
header("Location: index.html"); //Cabecera que se manda al navegador
?>
