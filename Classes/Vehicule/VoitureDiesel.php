<?php
namespace Classes\Vehicule;

/**
 * Class VoitureDiesel
 * Le voiture diesel "pollue", elle aura donc une propriété "pollution" ...
 * ... qui augmentera à chaque kilomètre
 */
class VoitureDiesel extends Voiture
{
    /**
     * @var int Représente la pollution de la voiture
     */
    private $pollution;

    /**
     * Surcharge : il initialise la pollution à 0
     * @param string $premiereMarque
     * @param string $premierMoteur
     */
    public function __construct(string $premiereMarque, string $premierMoteur)
    {
        // On pense bien à appeler le constructeur parent
        parent::__construct($premiereMarque, $premierMoteur);
        // On initialise la pollution
        $this->pollution = 0;
    }


    /**
     * Surcharge : la pollution augmente quand on roule
     * @param int $kilometres
     * @throws \Exception
     */
    public function rouler(int $kilometres): void
    {
        // On rappelle la méthode parent
        parent::rouler($kilometres);

        $this->pollution = $this->pollution + $kilometres;
        echo '<p>J\'avance de '. $kilometres. 'km (kilométrage = '. $this->km .'), pollution : '. $this->pollution .'</p>';
    }

    /**
     * @return int
     */
    public function getPollution(): int
    {
        return $this->pollution;
    }

    /**
     * @param int $pollution
     */
    public function setPollution(int $pollution): void
    {
        $this->pollution = $pollution;
    }
}