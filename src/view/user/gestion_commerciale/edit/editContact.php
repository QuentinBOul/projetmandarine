<?php

/*****************connect****************/
try {
    $dbh = new PDO('mysql:host=localhost;dbname=abi;charset=UTF8', 'root', '');
} catch (PDOException $e){
    var_dump($e->getLine(), $e->getMessage());
    die;
}

/****************request POST***************/
$idFonction = $_POST['idFonction'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$photo = $_POST['photo'];
$duree = $_POST['duree'];
$idContact = $_POST['idContact'];

$stmt = $dbh->prepare("UPDATE contacts SET id_fonc = ?, nom_contact = ?, prenom_contact = ?, tel_contact = ?, email_contact = ?, photo = ?, duree = ? WHERE id_contact = ?");
$stmt->execute(
    array(
        $idFonction,
        $nom,
        $prenom,
        $tel,
        $email,
        $photo,
        $duree,
        $_POST['idContact']
    )
);

header('location: ./contacts');

/****************disconnect***************/
$dbh = null;

?>