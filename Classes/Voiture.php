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
     * @var int Kilométrage de la voiture - Au départ à 0 - Augmente au fur et à mesure que la voiture roule
     */
    protected $km;

    /**
     * Il initialise le kilométrage à zéro
     * @param string $premiereMarque
     * @param string $premierMoteur
     */
    public function __construct(string $premiereMarque, string $premierMoteur)
    {
        var_dump('Appel du constructeur');
        $this->marque = $premiereMarque;
        $this->moteur = $premierMoteur;
        $this->km = 0;
    }

    /**
     * Exemple d'une fonction qu'on peut utiliser dans les Classes Filles sans la redéfinir
     */
    public function demarrer(): void
    {
        echo '<p>===== Démarrage =====</p>';
    }

    /**
     * Fait avancer la voiture - Le kilométrage augmente
     * @param int $kilometres
     */
    public function rouler(int $kilometres): void
    {
        $this->km = $this->km + $kilometres;
        echo '<p>J\'avance de '. $kilometres. 'km (kilométrage = '. $this->km .')</p>';
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