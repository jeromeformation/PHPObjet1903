<?php

class VoitureElectrique extends Voiture
{
    /**
     * @var int
     */
    private $energie;

    /**
     * @return int
     */
    public function getEnergie(): int
    {
        return $this->energie;
    }

    /**
     * @param int $energie
     */
    public function setEnergie(int $energie): void
    {
        $this->energie = $energie;
    }
}