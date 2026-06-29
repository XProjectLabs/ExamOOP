<?php

require_once __DIR__ . "/autoload.php";

$etudiants = [
new Etudiant("Ahmed", "Ali"),
new Etudiant("Sara", "Karimi")
];
$etudiants[0]->ajouterNote(new Note(16, "PHP"));
$etudiants[0]->ajouterNote(new Note(12, "Java"));
$etudiants[1]->ajouterNote(new Note(8, "PHP"));
$etudiants[1]->ajouterNote(new Note(14, "Java"));

echo $etudiants[0]->sePresenter();
echo "\n";
echo $etudiants[0]->calculerMoyenne();
echo "\n";
echo $etudiants[1]->sePresenter();
echo "\n";
echo $etudiants[1]->calculerMoyenne();