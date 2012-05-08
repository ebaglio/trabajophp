<?
session_start();
?>
<html>
<head>
<title>Leo variable se sesión</title>
</head>
<body>
Muestro esa variable:
<?
echo $_SESSION["mivariabledesesion"];
?>
</body>
</html>