<?php

/*****************connect****************/
try {
    $dbh = new PDO('mysql:host=localhost;dbname=abi;charset=UTF8', 'root', '');
} catch (PDOException $e){
    var_dump($e->getLine(), $e->getMessage());
    die;
}

/****************request POST***************/

$id_user = $_GET['id_user'];

$stmt = $dbh->prepare("DELETE FROM users WHERE id_user = ?");
$stmt->execute(
    array(
        $id_user    )
);

header('location: ./dashboard3');

/****************disconnect***************/
$dbh = null;

?>