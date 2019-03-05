<?php
include 'header.php';
require 'autoloader.php';
$formUtility = new FormUtility();
?>

<main class="container">
    <h1>Formulaire de la catégorie</h1>

    <form method="post">
        <?= $formUtility->generateHTML('Email', 'email', 'name') ?>
        <?= $formUtility->generateHTML('Description', 'textarea', 'desc') ?>
    </form>

</main>

<?php include 'footer.html' ?>