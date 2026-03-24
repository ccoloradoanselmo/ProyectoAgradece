<?php
session_start();
session_destroy();
header("Location: login.html"); //Cabecera que se manda al navegador
?>
