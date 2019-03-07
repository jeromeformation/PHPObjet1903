<?php
namespace Classes\Vehicule;

use Classes\Formulaire\FormUtility;

require 'autoloader.php';

$voitureNormal = new Voiture('Seat', 'essence');
$voitureDiesel1 = new VoitureDiesel('Nissan', 'diesel');
$zoe = new VoitureElectrique('Renault', 'electrique');

$formUtility= new FormUtility();
$formUtility= new FormUtility();
$formUtility= new FormUtility();


require 'header.php'


?>
<main class="container">
    <p>Voiture de base : <?= $voitureNormal->getMarque(); ?></p>
    <p>Voiture diesel : <?= $voitureDiesel1->getMarque(); ?></p>
    <p>Voiture électrique : <?= $zoe->getMarque(); ?></p>

    <?php
        $voitureNormal->demarrer();
        $voitureDiesel1->demarrer();
        $zoe->demarrer();

        echo '<h2>Voiture normale</h2>';
        $voitureNormal->rouler(100);
        $voitureNormal->rouler(10);

    echo '<h2>Voiture diesel</h2>';
    $voitureDiesel1->rouler(10000);
    $voitureDiesel1->rouler(10);

    echo '<h2>Voiture électrique</h2>';
    $zoe->rouler(-50000);
    $zoe->rouler(70); // Plus d'énergie
    $zoe->recharger();
    $zoe->rouler(150); // Plus d'énergie
    $zoe->recharger();
    $zoe->rouler(100); // Plus d'énergie

    //$zoe->recharger(-1000);
    //var_dump($zoe);
    $zoe->recharger(9000);
    var_dump($zoe);


    ?>

</main>
<?php require 'footer.html' ?>