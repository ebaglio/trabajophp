<?php

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
                  )
);

echo $fruta['limón']['color'],'</br>';
$mifruta = 'naranja';
echo $fruta[$mifruta]['color'],'</br>';

?>
