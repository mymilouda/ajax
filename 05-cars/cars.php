<?php

// Connexion à la BDD
$db = new PDO('mysql:host=127.0.0.1;dbname=voiture;charset=utf8', 'root', "" ,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// On récupère les smartphones

// Transformer le tableau en json (json_encode)

$sql = "SELECT * FROM cars";

$query=$db-> query($sql);
$voitures = $query-> fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($voitures);
