<?php
require_once "Vehicule.php";
// Bicycle.php
class Bicycle extends Vehicule
{
    private $hasLuggageRack;

    public function getHasLuggageRack(): bool
    {
        return $this->hasLuggageRack;
    }

    public function setHasLuggageRack(bool $hasLuggageRack): void
    {
        $this->hasLuggageRack = $hasLuggageRack;
    }
}