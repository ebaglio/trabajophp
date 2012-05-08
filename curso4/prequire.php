     <?php
     require_once 'fichero.class';
     $file=new fichero('log.log');
     echo $file->getname()." tiene ". $file->getsize() ."bytes";
     $file::verdir(".");
     echo $file->contador;
     $file->contador++;
     echo $file->contador;
     $_SESSION['fichero']=$file;
     var_dump($_SESSION);

     ?>