<?php
// Gestion des messages d'erreurs
$messageName = '';
$messagePrice = '';
$messageDesc = '';


// Si le formulaire est soumis : on fait les vérifications
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // On vérifie le formulaire
    var_dump($_POST);
    
    // Vérifications du nom
    if(
        !(isset($_POST['name'])) || empty($_POST['name'])
    ) {
        $messageName = 'Le champ nom doit être rempli';
    } elseif(strlen($_POST['name']) > 55) {
        $messageName = 'Le nom ne doit pas dépasser 55 caractères';
    }   
    
    // Vérifications du prix
    if(
        !(isset($_POST['price'])) || empty($_POST['price'])
    ) {
        $messagePrice = 'Le champ prix doit être rempli';
    } elseif(!is_numeric($_POST['price'])) {
        $messagePrice = 'Le champ prix doit être un chiffre';
    } else {
         // On transforme le prix en chiffre
        $_POST['price'] = (double) $_POST['price'];
        if($_POST['price'] < 0) {
            $messagePrice = 'Le champ prix doit être supérieur à 0';
        } elseif($_POST['price'] > 99999999.99) {
            $messagePrice = 'Le champ prix doit être inférieur à 100 millions';
        }
    }
    

    
    // Vérifications de la description
    if(
        !(isset($_POST['description'])) || empty($_POST['description'])
    ) {
        $messageDesc = 'Le champ description doit être rempli';
    }  
    

    
  

    echo 'ça a l\'air ok';

}























