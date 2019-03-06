<?php

class Gateau
{
    protected static $nbEated = 0;
    /**
     * @var string
     */
    private $name;

    public static function getNbEated(): int {
        return static::$nbEated;
    }
    public static function setNbEated(int $nb): void {
        static::$nbEated = static::$nbEated + $nb;
    }
    public static function addEated(): void {
        static::$nbEated++;
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}