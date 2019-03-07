<?php

use Classes\User;

include('autoloader.php');

// Création d'un utilisateur
$user1 = new User();
// Changement de l'email
$user1->setEmail('test@test.fr');
// Affichage de l'email
echo $user1->getEmail();
// Changement de l'email
$user1->setEmail('test2@test.fr');
// Affichage de l'email
echo $user1->getEmail();