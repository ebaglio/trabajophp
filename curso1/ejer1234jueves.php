<?php
# 1)Define una matriz asociativa con 10 valores y escribela por pantalla en una tabla
# 2)Muestras la martiz asociativa $_SERVER
# 3)consulta la ayuda de 5 funciones de distintos tipos y prueba su funcionamiento con un ejemplo
# 4)Recorre una matriz multidimensional*/




$animal = array(
'mamifero' => 'león',
'ave' => 'pato',
'insecto' => 'mosca',
'pez' => 'sardina',
'reptil' => 'cocodrilo',
'molusco'=> 'caracol',
'crustaceo'=> 'bogavante'
);

print_r($animal);

echo '/<br>';

	echo '<table>';
	echo '<tr>'.'<td>'.'CLASE'.'</td>'.'<td>'.'ANIMAL'.'</td>'.'</tr>';	
        foreach ($animal as $clave=>$valor)
        {
        		echo '<tr>'.'<td>'."$clave",'</td>','<td>',"$valor",'</td>','</tr>';
        }
	echo '</table>';


$fruta = array(
'naranja' => array(
                  'propiedad' => 'jugosa',
                  'color' => 'naranja',
                  'sabor' => 'dulce'
                  ),
'limón' => array(
                  'propiedad' => 'jugoso',
                  'color' => 'amarillo',
                  'sabor' => 'cítrico'
                  ),
'melón' => array(
                  'propiedad' => 'jugoso',
                  'color' => 'verde',
                  'sabor' => 'melón'
                  )
);

echo 'Otro ejercicio.</br>';
echo '<table>';
	echo '<tr>'.'<td>'.'FRUTA'.'</td>'.'<td>'.'PROPIEDAD'.'</td>'.'<td>'.'COLOR'.'</td>'.'<td>'.'SABOR'.'</td>'.'</tr>';	
        foreach ($fruta as $clavef=>$valorarray)
        {
        	echo '<tr>'.'<td>'."$clavef".'</td>';
			foreach ($valorarray as $valorin)
       	    {
        		echo '<td>',"$valorin",'</td>';
        	}
			echo '</tr>';
        }
	echo '</table>';







	
	


?>
