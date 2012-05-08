<?php
     class fichero{
     private $name;
     private $size;
     public $contador;
     function __construct($name)
             {
             if (file_exists ($name))
             {

             $this->name=$name;
             $this->size=filesize($name);

             }else
             {
                     if(!touch($name))
                     {
                             die('error');
                     }
             }
             }
public function setname($name)
             {
             if(rename($this->name,$name))
             {
             die('error');
             }else{
                     die('error');
             }
             }
public function getname ()
     {
     return $this->name;
     }

public function getsize ()
     {
     return $this->size;
     }
     static public function verdir($carpeta)
     {
             if (is_dir ($carpeta)){
     //Utilizamos scandir para leer los ficheros
     $ArrFicheros = scandir ($carpeta);
     // Mostramos los valores del array
     for ($i = 0; $i < count ($ArrFicheros); $i++){
             //scandir() cuenta "." y ".."
             //No los mostramos
             if ($ArrFicheros[$i] != "." && $ArrFicheros[$i] != ".."){
                     //Nos aseguramos de que sea un fichero y no una carpeta.
                     if (is_file ($carpeta . "/" . $ArrFicheros[$i])){
                             echo $ArrFicheros[$i] . "<br />";
                     }
             }
             }
     } else {
     echo "Error. El directorio no existe.";
     }
             }
     }
     ?>
