<?php

  if (isset($_REQUEST['save'])){
  $text_content = $_REQUEST['textcontent'];
      $f=fopen("texto.txt",'w+');
          fwrite($f, $text_content);
      echo "guardado";
  }
  $contenido = file_get_contents('texto.txt');

  print "
<form method=\"POST\" action=\"$_SERVER[PHP_SELF]\">
<table>";
  echo "<textarea name=\"textcontent\" cols=\"40\" rows=\"4\">"
     .htmlspecialchars($contenido).
    "</textarea>";
  print "
  <input type=\"submit\" value=\"Submit\" name=\"save\"></form>

  <br><hr>";

  ?>