<?php

use Classes\Database\Connection;

require 'autoloader.php';

//// Logique
// Instanciation (new) de "Connection"
$connexion = new Connection();
// Appel de la méthode "preparedQuery" de Connection
$product = $connexion->preparedQuery();

//// HTML
// header
require 'header.php';
// Affichage des propriétés du produit
?>
<main class="container">
    <h1><?= $product[0]['name'] ?></h1>
    <p><?= $product[0]['description'] ?></p>
</main>
<?php
// footer
require 'footer.html';












