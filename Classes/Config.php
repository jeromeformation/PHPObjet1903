<?php
namespace Classes;

class Config
{
    private $data = "default";
    private static $instance = null;
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }
}