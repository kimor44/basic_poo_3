<?php
require_once "Vehicule.php";
require_once "LightableInterface.php";
// Bicycle.php
class Bicycle extends Vehicule implements LightableInterface
{
    private $hasLuggageRack;

    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed()>10){
            return true;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function getHasLuggageRack(): bool
    {
        return $this->hasLuggageRack;
    }

    public function setHasLuggageRack(bool $hasLuggageRack): void
    {
        $this->hasLuggageRack = $hasLuggageRack;
    }
}