    <?php
    $v=array("pepito","antonio","juan","fernando","pedro");
    $i=0;
    while ($i<=4)
    {
            if ($v[$i]<>"juan")
    {
                    $i++;
                    continue;   //Continua y no hace nada m?s por debajo
    }
            echo $v[$i];
            $i++;
}

    ?>
