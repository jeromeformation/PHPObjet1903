<?php
require 'traitement-formulaire-produit.php';

?>



<?php include 'header.php'; ?>

<main class="container">
    <h1>Création d'un nouveau produit</h1>
    <form method="post">
        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input name="name"
				type="text"
				class="form-control <?= ($messageName) ? 'is-invalid' : '' ?>"
				id="name" aria-describedby="productNameHelp"
				placeholder="Saisir le nom du produit"
				value="<?= (isset($_POST['name'])) ? $_POST['name']: '' ?>"
				>
            
			
			<small id="productNameHelp" class="form-text text-muted sr-only">Saisie du nom du produit</small>
            <div class="invalid-feedback"><?= $messageName ?></div>
        </div>
        <div class="form-group">
            <label for="price">Prix du produit</label>
            <input name="price" type="number" min="0" step="0.01" class="form-control <?= ($messagePrice) ? 'is-invalid' : '' ?>" id="price" placeholder="Saisir le prix"
				value="<?= (isset($_POST['price'])) ? $_POST['price']: '' ?>"
			>
			<div class="invalid-feedback"><?= $messagePrice ?></div>
		</div>
        <div class="form-group">
            <label for="description">Description du produit</label>
            <textarea
				name="description"
				class="form-control <?= ($messageDesc) ? 'is-invalid' : '' ?>"
				id="description"
				rows="3"
			>
				<?= (isset($_POST['description'])) ? $_POST['description']: '' ?>
			</textarea>
			<div class="invalid-feedback"><?= $messageDesc ?></div>
		</div>

        <button type="submit" class="btn btn-primary">Créer le produit</button>
    </form>
</main>

<?php include 'footer.html' ?>