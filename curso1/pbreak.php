    <?php
    $v=array("pepito","antonio","juan","fernando","pedro");
    $encontrado=FALSE;
    $buscar="juan";
    $i=0;
    while (!$encontrado && $i<=4)  //Salimos si acabamos
	{
         if ($v[$i]==$buscar)
            {
               echo "encontrado ".$buscar." en la posicion: ".$i."\n";
               $encontrado=TRUE;    //Marco encontrado a cierto si lo encuentro
               break;
        	} else{
                    $i++;
                    }
              if (!$encontrado)    //si no encontrado tambi?n se notifica
                 {
                echo "Lo sentimos, ".$buscar." no existe en el array. \n";
                 }
	}
    ?>