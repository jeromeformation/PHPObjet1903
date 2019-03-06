<?php

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
    private $pollution = 0;

    /**
     * Surcharge : la pollution augmente quand on roule
     * @param int $kilometres
     */
    public function rouler(int $kilometres): void
    {
        echo '<p>J\'avance de '. $kilometres. 'km</p>';
        $this->km = $this->km + $kilometres;
        $this->pollution = $this->pollution + $kilometres;
        echo '<p>Kilométrage = '. $this->km .', pollution : '. $this->pollution .'</p>';
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