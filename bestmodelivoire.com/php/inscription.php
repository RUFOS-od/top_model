<?php

$genreModel = $_POST['genreModel'];
$nomModel = $_POST['nomModel'];
$prenomModel = $_POST['prenomModel'];
$ageModel = $_POST['ageModel'];
$photoModel = $_POST['photoModel'];
$emailModel = $_POST['emailModel'];
$numModel = $_POST['numModel'];
$poidsModel = $_POST['poidsModel'];
$villeModel = $_POST['villeModel'];
$tailleModel = $_POST['tailleModel'];

// connection à la base de données
$db = new mysqli('localhost', 'root', '', 'bestmodelivoire');
if ($db->connect_error) {
    die('Erreur de connexion (' . $db->connect_errno . ') ' . $db->connect_error);
}else{
    $stmt = $db->prepare("INSERT INTO inscription (genreModel, nomModel, prenomModel, ageModel, photoModel, emailModel, numModel, poidsModel, villeModel, tailleModel) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssssss', $genreModel, $nomModel, $prenomModel, $ageModel, $photoModel, $emailModel, $numModel, $poidsModel, $villeModel, $tailleModel);
    $stmt->execute();
    $stmt->close();
}
