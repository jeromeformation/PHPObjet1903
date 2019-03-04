<?php
// Déclaration des catégories (on exportera par la suite)
$categories = ['Voyage', 'Bien-être'];

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Container</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="formulaire-produit.php">Formulaire création produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculatrice.php">Calculatrice</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            
            <?php foreach($categories as $cat) { 
                echo '<a class="dropdown-item" href="#">'.$cat.'</a>';
            } ?>
			<?php // Deuxième syntaxe ?>
            <?php foreach($categories as $cat) : ?>
                <a class="dropdown-item" href="#"><?= $cat ?></a>
            <?php endforeach; ?>
            
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </div>
</nav>