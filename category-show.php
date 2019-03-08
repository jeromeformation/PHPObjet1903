<?php

use Classes\Database\Connection;

require 'autoloader.php';

//// Logique
// Instanciation (new) de "Connection"
$connexion = new Connection();
// Appel de la méthode "preparedQuery" de Connection
$category = $connexion->findById('category', 2);
//// HTML
// header
require 'header.php';
// Affichage des propriétés du produit
?>
<main class="container">
    <h1><?= $category[0]['name'] ?></h1>
</main>
<?php
// footer
require 'footer.html';












