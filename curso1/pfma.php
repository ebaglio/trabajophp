<?php

function abc() {
  $array = func_get_args();
  $arrayCount = count($array);
  for($i = 0; $i < $arrayCount; $i++) {
    echo "Se utiliza como parametro $i : {$array[$i]}"."<br>";
  }
}


       abc('test', 'test2', 3, 4);
?>