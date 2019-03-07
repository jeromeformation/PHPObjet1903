<?php
namespace Classes\Vehicule;

/**
 * Class VoitureElectrique
 * Le voiture électrique possède de l'énergie, elle la consomme quand elle roule
 */
class VoitureElectrique extends Voiture
{
    /**
     * @var int - Energie de la voiture
     */
    private $energie;

    /**
     * Surcharge : il initialise l'énergie à 100
     * @param string $premiereMarque
     * @param string $premierMoteur
     */
    public function __construct(string $premiereMarque, string $premierMoteur)
    {
        // On pense bien à appeler le constructeur parent
        parent::__construct($premiereMarque, $premierMoteur);
        // On initialise l'énergie
        $this->energie = 100;
    }

    /**
     * Surcharge : il perd de l'énergie en roulant
     * @param int $kilometres
     * @throws \Exception
     */
    public function rouler(int $kilometres): void
    {
        // On rappelle la méthode parent
        parent::rouler($kilometres);

        // On perd de l'énergie
        $this->setEnergie($this->energie - $kilometres);

        // On vérifie qu'il nous reste de l'énergie pour rouler
        if($this->energie < $kilometres) {
            echo 'Plus d\'énergie';
        } else {
            // Affichage
            echo '<p>Kilométrage = '. $this->km .', énergie : '. $this->energie .'</p>';
        }
  }

    /**
     * @return int
     */
    public function getEnergie(): int
    {
        return $this->energie;
    }

    /**
     * On vérifie que l'énergie est bien entre 0 et 100 avant de la modifier
     * @param int $nouvelleEnergie
     */
    public function setEnergie(int $nouvelleEnergie): void
    {
        if ($nouvelleEnergie < 0) {
            $this->energie = 0;
        } elseif ($nouvelleEnergie > 100) {
            $this->energie = 100;
        } else {
            $this->energie = $nouvelleEnergie;
        }
    }

    /**
     * Permet d'ajouter de l'énergie à la voiture
     * @param int $recharge - Par défaut 100 (maximum)
     * @throws \Exception
     */
    public function recharger(int $recharge = 100): void
    {
        if ($recharge < 0) {
            throw new \Exception('On peut recharger la voiture électrique seulement avec une valeur positive');
        }
        $this->setEnergie($this->energie + $recharge);
    }
}