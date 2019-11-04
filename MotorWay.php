<?php
require_once "HighWay.php";

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }

    public function addVehicule($vehicule)
    {
        if($vehicule instanceof Car || $vehicule instanceof Truck){
            $this->setCurrentVehicules($vehicule);
            return $this;
        }
    }
}