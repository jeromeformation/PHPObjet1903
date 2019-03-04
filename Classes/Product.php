<?php

class Product {
    const DEFAULT_NB_VIEWS = 0;

    public $name;
	public $description;
	public $price;

	public function displayPrice() {
        return 'Le prix : ' . $this->price . '€';
    }
}