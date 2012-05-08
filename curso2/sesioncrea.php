<?php
session_start();
?>
<html>
<head>
<title>Generar variable de sesión</title>
</head>
<body>
<?
$_SESSION["mivariabledesesion"] = "Hola este es el valor de la variable de sesión";
?>
</body>
</html>