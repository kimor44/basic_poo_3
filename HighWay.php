<?php

abstract class HighWay
{
    protected $currentVehicules;
    protected $nbLane;
    protected $maxSpeed;

    abstract protected function addVehicule($vehicule);

    /**
     * @return mixed
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getCurrentVehicules(): array
    {
        return $this->currentVehicules;
    }

    /**
     * @param mixed $currentVehicules
     * @return HighWay
     */
    public function setCurrentVehicules($currentVehicules):HighWay
    {
        $this->currentVehicules[] = $currentVehicules;
        return $this;
    }
}