<?php

require_once 'Auteur.php';

echo "Tests de la classe Auteur \n\n";

$auteur = new Auteur("Hugo", "Victor", 1802);
echo "Test 1 - Création : OK\n";


$expected = "Auteur : Victor Hugo";
$result = $auteur->toString();
echo "Test 2 - toString() : " . ($result === $expected ? "OK" : "ECHEC (obtenu: $result)") . "\n";


echo "Test 3 - getNom() : " . ($auteur->getNom() === "Hugo" ? "OK" : "ECHEC") . "\n";


echo "Test 4 - getPrenom() : " . ($auteur->getPrenom() === "Victor" ? "OK" : "ECHEC") . "\n";


echo "Test 5 - getAnneeNaissance() : " . ($auteur->getAnneeNaissance() === 1802 ? "OK" : "ECHEC") . "\n";


$auteur->setNom("Zola");
echo "Test 6 - setNom() : " . ($auteur->getNom() === "Zola" ? "OK" : "ECHEC") . "\n";


$auteur->setPrenom("Emile");
echo "Test 7 - setPrenom() : " . ($auteur->getPrenom() === "Emile" ? "OK" : "ECHEC") . "\n";


$auteur->setAnneeNaissance(1840);
echo "Test 8 - setAnneeNaissance() : " . ($auteur->getAnneeNaissance() === 1840 ? "OK" : "ECHEC") . "\n";

