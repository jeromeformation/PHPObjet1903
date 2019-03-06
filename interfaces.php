<?php

interface VehiculeInterface {
    public function getBrokenPieces(): array;
}
class Vehicule implements  VehiculeInterface {
    public function getBrokenPieces(): array
    {
        return ['Piece 1', 'Piece 2'];
    }
}
class Garage {
    private $vehicules = [];
    public function addVehicule(VehiculeInterface $vehicule)
    {
        $this->vehicules[] = $vehicule;
    }
    public function giveMeStats()
    {
        foreach ($this->vehicules as $vehicule) {
            var_dump($vehicule->getBrokenPieces());
        }
    }
}
$vehicule = new Vehicule();
$garage = new Garage();
$garage->addVehicule($vehicule);
$garage->giveMeStats();