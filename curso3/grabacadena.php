
<?php
          $Texto="La materia se transforma consumiendo o liberando energía.";
          $f = fopen("Texto1.txt",w+);
          fputs($f, $Texto);
          echo "Texto almacenado correctamente";
          fclose($f);
  ?>