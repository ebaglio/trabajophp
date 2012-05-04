<?php
$matriz = array( 5 => 25, -1 => "negativo", "número 1" => "cinco");
print "<pre>"; print_r($matriz); print "<pre>";
unset ($matriz[5]);
print "<pre>"; print_r($matriz); print "<pre>";
?>


<?php
$matriz = array( 5 => 25, -1 => "negativo", "número 1" => "cinco");
print "<pre>"; print_r($matriz); print "<pre>";
unset ($matriz);
print "<pre>"; print_r($matriz); print "<pre>";
?>