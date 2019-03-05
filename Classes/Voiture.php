<?php

/**
 * Class Voiture : classe représentant une voiture
 */
class Voiture
{
    /**
     * @var string
     */
    protected $marque;

    /**
     * @var string
     */
    protected $moteur;

    /**
     * @var int
     */
    protected $km;

    public function __construct(string $premiereMarque, string $premierMoteur)
    {
        var_dump('Appel du constructeur');
        $this->marque = $premiereMarque;
        $this->moteur = $premierMoteur;
        $this->km = 0;
    }

    public function demarrer(): void
    {
        echo '===== Démarrage =====';
    }

    public function rouler(int $kilometres): void
    {
        echo '<p>J\'avance de '. $kilometres. 'km</p>';
        $this->km = $this->km + $kilometres;
        echo '<p>Kilométrage = '. $this->km .'</p>';
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $nouvelleMarque
     */
    public function setMarque(string $nouvelleMarque): void
    {
        $this->marque = $nouvelleMarque;
    }

    /**
     * @return string
     */
    public function getMoteur(): string
    {
        return $this->moteur;
    }

    /**
     * @param string $nouveauMoteur
     */
    public function setMoteur(string $nouveauMoteur): void
    {
        $this->moteur = $nouveauMoteur;
    }

    /**
     * @return int
     */
    public function getKm(): int
    {
        return $this->km;
    }

    /**
     * @param int $km
     */
    public function setKm(int $km): void
    {
        $this->km = $km;
    }
}