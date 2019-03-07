<?php
namespace Classes\Formulaire;

require 'autoloader.php';
include 'header.php';
$formUtility = new formUtility();

 ?>

<main class="container">
    <h1>Formulaire de la catégorie</h1>

    <form method="post">
        <?= $formUtility->generateHTML('Email', 'email', 'name') ?>
        <?= $formUtility->generateHTML('Description', 'textarea', 'desc') ?>
    </form>

</main>

<?php include 'footer.html' ?>