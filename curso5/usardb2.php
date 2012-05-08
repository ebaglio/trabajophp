

 <?php

$DBACCESS = array(
        "connstring"=>"mysql:host=localhost;dbname=curso",
        "host"=>"localhost",
        "user"=>"root",
        "password"=>"usuario"
        );

        echo implode('<br \>',$DBACCESS);
try{
        $dbh = new PDO($DBACCESS['connstring'],$DBACCESS['user'],$DBACCESS['password']);
} catch (PDOException $e) {
        echo $e->getMessage();
}
$sql = 'SELECT * FROM animal ORDER BY nombre';
foreach ($dbh->query($sql) as $row ) {
                echo $row['nombre'] . "    :  ";
                echo $row['categoria'] . "<br>";
}




?>