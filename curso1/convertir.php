<?php
print "<hr>";
$foo = "5bar"; // cadena
$bar = true;   // booleano
settype($foo, "integer"); // $foo es ahora 5   (entero)
print $foo."<br>";
settype($bar, "string");  // $bar es ahora "1" (cadena)
print $bar."<br>";
?>