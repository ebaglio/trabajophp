<?php

function ficheros_directorio ($carpeta){
        // Nos aseguramos que la carpeta exista
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

$dir=opendir('/');
echo "<table>";
while ($file = readdir($dir))
{
if (is_dir($file)){
	echo "es un directorio"."</br>";
	ficheros_directorio($file);
}
else if ($file != "." && $file != "..")
{
	echo "es un fichero"."</br>";
	$size = filesize($file) ; // Lo pasa a Kbytes
	echo "<TR><TD >".$file."</TD ><td>".$size."</TD></TR>";
}
}
closedir($dir);
echo "</table>";

?>