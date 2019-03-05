<?php

class VoitureDiesel extends Voiture
{
    /**
     * @var int
     */
    private $pollution;

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