    <?php
    header("Content-type: text/plain");

    ob_implicit_flush(true);
    ob_end_flush();

    for($i=0;$i<10;$i++)
    {
echo $i . "\n";
usleep(300000);
    }
    ?>