<?php

/*****************connect****************/
try {
    $dbh = new PDO('mysql:host=localhost;dbname=abi;charset=UTF8', 'root', '');
} catch (PDOException $e){
    var_dump($e->getLine(), $e->getMessage());
    die;
}

/****************request POST***************/
$raisonSociale = $_POST['raisonSociale'];
$adresse = $_POST['adresse'];
$codePostal = $_POST['codePostal'];
$ville = $_POST['ville'];
$ca = $_POST['ca'];
$effectif = $_POST['effectif'];
$tel = $_POST['tel'];
$type = $_POST['type'];
$nature = $_POST['nature'];
$com = $_POST['com'];
$idClient = $_POST['idClient'];

$stmt = $dbh->prepare("UPDATE clients SET raison_sociale = ?, adresse_client = ?, code_postal_client = ?, ville_client = ?, ca = ?, effectif = ?, telephone_client = ?, type_client = ?, nature_client = ?, commentaire_client = ?  WHERE id_client = ?");
$stmt->execute(
    array(
        $raisonSociale,
        $adresse,
        $codePostal,
        $ville,
        $ca,
        $effectif,
        $tel,
        $type,
        $nature,
        $com,
        $_POST['idClient']
    )
);

header('location: ./clients');

/****************disconnect***************/
$dbh = null;

?>