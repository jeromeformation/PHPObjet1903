<?php

require('autoloader.php');

echo 'Bonjour';

// Création d'un premier object Product : un hamac
$hamac = new Product();
// Changement des valeurs des propriétés du hamac
$hamac->setName('Hamac');
$hamac->setDescription('Pour se reposer');
$hamac->setPrice(15.99);
// Debug du hamac
var_dump($hamac);

// Création d'un deuxième object Product : un parasol
$parasol = new Product();
// Changement des valeurs des propriétés du parasol
$parasol->setName('Parasol');
$parasol->setDescription('Pour faire de l\'ombre');
$parasol->setPrice(150);
// Debug du parasol
var_dump($parasol);

// Affichage d'une propriété (price) du parasol
echo '<p>' . $parasol->getPrice() . '€</p>';
// Appel d'une méthode du parasol
echo '<p>' . $parasol->displayPrice() . '</p>';
echo '<p>' . $hamac->displayPrice() . '</p>';

// Affichage d'une constante
echo '<p>Nombre de vues par défaut des produits : '
    . $hamac::DEFAULT_NB_VIEWS .
    '</p>';


$voyage = new Category();
