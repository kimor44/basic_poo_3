<?php
require_once "Vehicule.php";
require_once "LightableInterface.php";

class Car extends Vehicule implements LightableInterface
{

    private $energy;

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $ernergyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start()
    {
        $this->setCurrentSpeed(10);
    }

    /**
     * @return string|null
     */
    function getEnergy():? string
    {
        return $this->energy;
    }

    /**
     * @return int|null
     */
    function getEnergyLevel():? int
    {
        return $this->ernergyLevel;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->ernergyLevel = $energyLevel;
    }
    
}
