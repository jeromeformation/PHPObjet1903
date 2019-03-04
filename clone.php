<?php

require('autoloader.php');

// On créé une instance de produit
$product1 = new Product();
$product1->setName('Hamac');

$product2 = $product1;

$product1->setName('Parasol');

echo $product2->getName();
// Par référence : parasol



// On créé une instance de produit
$product1 = new Product();
$product1->setName('Hamac');
$product2 = clone $product1;
$product1->setName('Parasol');
echo $product2->getName();
// Par copie : hamac


$product1 = new Product();
$product1->setName('Hamac');
var_dump($product1);
$product2 = new Product();
$product2->setName('Hamac');
var_dump($product2);

if($product1 == $product2) {
    echo "C'est les memes";
} else {
    echo "Ils sont différents";
}










