<?php

require 'autoloader.php';
/*
// Fabriquer des gateaux, compter le nombre de gateaux mangés
var_dump(Gateau::getNbEated() . ' gateau mangé');

// Faire un gateau et le manger
$fondant = new Gateau('Fondant au chocolat');
Gateau::addEated();

// Faire un gateau et le manger
$fondant = new Gateau('Fondant au chocolat');
Gateau::addEated();


var_dump(Gateau::getNbEated() . ' gateaux mangés');
*/

var_dump(Gateau::getNbEated());
Gateau::addEated();
var_dump(Gateau::getNbEated());


var_dump(GateauIndividuel::getNbEated());
GateauIndividuel::addEated();
GateauIndividuel::addEated();
GateauIndividuel::addEated();
GateauIndividuel::addEated();
GateauIndividuel::addEated();
GateauIndividuel::addEated();
GateauIndividuel::addEated();
GateauIndividuel::addEated();
GateauIndividuel::addEated();
GateauIndividuel::addEated();
var_dump('Indiv :' . GateauIndividuel::getNbEated());

var_dump(GateauGroupe::getNbEated());
GateauGroupe::addEated();
GateauGroupe::addEated();
GateauGroupe::addEated();
GateauGroupe::addEated();
GateauGroupe::addEated();
var_dump('Groupe :' . GateauGroupe::getNbEated());
























