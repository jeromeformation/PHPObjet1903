<?php
require 'autoloader.php';

use Classes\Database\Connection;

$connection = new Connection();

$products = $connection->query(
    'SELECT * FROM product'
);

// HTML
include 'header.php'; ?>

<main class="container">
    <h1>Liste des produits</h1>

    <?php foreach($products as $product) : ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $product['name']; ?></h5>
                <p class="card-text"><?= $product['description']; ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach; ?>

</main>

<?php include 'footer.html'; ?>







