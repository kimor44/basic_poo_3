<?php
require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }

    public function addVehicule($vehicule)
    {
        if($vehicule instanceof Bicycle){
            $this->setCurrentVehicules($vehicule);
            return $this;
        }
    }
}