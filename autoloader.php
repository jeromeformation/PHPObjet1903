<?php

// Cet autoloader permet de faire les "require" des classes
// se trouvant dans le dossier "Classes"
// On incluera donc ce fichier dans chaque fichier qui
// utilisera une classe se trouvant dans le dossier "Classes"

function autoloader_perso($className) {
    require_once($className . '.php');
}
spl_autoload_register('autoloader_perso');
