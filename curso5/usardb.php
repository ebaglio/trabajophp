

 <?php

$DBACCESS = array(
        "connstring"=>"mysql:host=localhost;dbname=test",
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
$sql = 'SELECT * FROM releases ORDER BY version';
foreach ($dbh->query($sql) as $row ) {
                echo $row['name'] . "    :  ";
                echo $row['version'] . "      :  ";
                echo $row['date'] . "<br>";
}

$sql = "UPDATE releases set date =now() WHERE id > 2";

$affectedRows = $dbh->exec($sql);
echo "Registros modificados: $affectedRows";

?>