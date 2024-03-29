<?php
require_once "Vehicule.php";
require_once "LightableInterface.php";
require_once "SetEnergy.php";

class Truck extends Vehicule implements LightableInterface
{
    private $storageCapacity;

    private $energy;

    private $loading = 0;

    private $ernergyLevel;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    use SetEnergy;

    function getEnergy():? string
    {
        return $this->energy;
    }

    public function setStorageCapacity($capacityStorage): void
    {
        $this->storageCapacity = $capacityStorage;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setloading($loading): void
    {
        if($loading<0){
            $this->loading = 0;
        }elseif($loading > $this->storageCapacity){
            $this->loading = $this->storageCapacity;
        }
        else{
            $this->loading = $loading;
        }        
    }

    public function getLoading():? int
    {
        return $this->loading;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->ernergyLevel = $energyLevel;
    }

    function getEnergyLevel():? int
    {
        return $this->ernergyLevel;
    }

    public function isFull(): string
    {
        if($this->loading == $this->storageCapacity){
            return "full";
        }else{
            return "in filling";
        }
    }
}