<?php

use Classes\Vehicule\Voiture;

require 'autoloader.php';

$voiture = new Voiture('Renault', 'essence');
var_dump($voiture);
$voiture2 = new Voiture('Peugeot', 'diesel');
var_dump($voiture2);
