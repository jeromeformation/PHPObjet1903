<?php

class User {
    private $email;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $nouveauEmail): void
    {
        $this->email = $nouveauEmail;
    }
}