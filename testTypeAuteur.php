<?php

require_once 'typeAuteur.php';

echo "Tests de la classe TypeAuteur \n\n";


$type = new TypeAuteur("Poète");
echo "Test 1 - Création : OK\n";


echo "Test 2 - getLibelle() : " . ($type->getLibelle() === "Poète" ? "OK" : "ECHEC") . "\n";


$type->setLibelle("Poète");
echo "Test 3 - setLibelle() : " . ($type->getLibelle() === "Poète" ? "OK" : "ECHEC") . "\n";


$expected = "Type : Poète";
$result = $type->toString();
echo "Test 4 - toString() : " . ($result === $expected ? "OK" : "ECHEC (obtenu: $result)") . "\n";

