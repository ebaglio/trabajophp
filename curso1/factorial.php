<?php

function factorial($n) {

    if ($n==0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}


if (isset($_REQUEST["factorialnumber"])){
		  $numero = $_REQUEST["factorialnumber"];
          echo factorial($numero)."<br>";
  } 
echo "<br>"."<form method=\"POST\" action=\"$_SERVER[PHP_SELF]\">
<td>factorial:</td><td> <input type=\"text\" name=\"factorialnumber\" size=10></td>
<input name=\"send\" type=\"submit\" id=\"send\" value=\"Enviar\">
</form>";
?>