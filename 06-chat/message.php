<?php

// Connexion à la BDD
$db = new PDO('mysql:host=127.0.0.1;dbname=chat;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

header('Content-type: application/json');



// On vérifie que le formulaire a été soumis
if ('POST' === $_SERVER['REQUEST_METHOD']) {
    // On récupère les champs du formulaire

$pseudo = $_POST['pseudo'];
$message = $_POST['message'];
//$date = date('Y-m-d');
$date = (new DateTime())->format('Y-m-d H:i:s');

$pseudo = 'value';
$message = 'value';
$stmt = $db->prepare("INSERT INTO `message` (pseudo, `date`, `message`) VALUES (:pseudo, :date, :message)");
$stmt->bindValue(':pseudo', $pseudo);
$stmt->bindValue(':message', $message);
$stmt->bindValue(':date', $date);
$stmt->execute();

// on rencoie le message en json
echo json_encode([
    'pseudo' => $pseude,
    'message' => $message,
    'date' => $date
]);


}
