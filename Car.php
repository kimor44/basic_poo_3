<?php
require_once "Vehicule.php";
require_once "LightableInterface.php";
require_once "SetEnergy.php";

class Car extends Vehicule implements LightableInterface
{

    private $energy;

    private $hasParkBrake = true;

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

    public function start(): void
    {
        if($this->hasParkBrake == true){
            throw new Exception('Impossible d`avancer avec le frein à main');
        }
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

    use SetEnergy;

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->ernergyLevel = $energyLevel;
    }

    /**
     * @param mixed $hasParkBrake
     */
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

}
