<?php
namespace Classes;

class Product {
    const DEFAULT_NB_VIEWS = 0;

    private $name;
	private $description;
	private $price;

	public function displayPrice() {
        return 'Le prix : ' . $this->price . '€';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $nouveauNom): void
    {
        $this->name = $nouveauNom;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        if ($price < 0) {
           die('Le prix doit être supérieur à 0');
        }
        $this->price = $price;
    }
}








