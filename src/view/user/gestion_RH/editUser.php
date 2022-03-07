<?php

/*****************connect****************/
try {
    $dbh = new PDO('mysql:host=localhost;dbname=abi;charset=UTF8', 'root', '');
} catch (PDOException $e){
    var_dump($e->getLine(), $e->getMessage());
    die;
}

/****************request POST***************/
$role = $_POST['role'];
$login_user = $_POST['login_user'];
$pass_user = $_POST['pass_user'];

$stmt = $dbh->prepare("UPDATE users SET role = ?, login_user = ?, pass_user = ? WHERE id_user = ?");
$stmt->execute(
    array(
        $role,
        $login_user,
        $pass_user,
        $_POST['id_user']
    )
);

header('location: ./dashboard3');

/****************disconnect***************/
$dbh = null;

?>