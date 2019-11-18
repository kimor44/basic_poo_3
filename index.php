<?php
require_once "Bicycle.php";
require_once "Car.php";
require_once "Truck.php";
require_once "FamilyCar.php";
require_once "Pickup.php";
require_once "Skateboard.php";
require_once "HighWay.php";
require_once "PedestrianWay.php";
require_once "ResidentialWay.php";
require_once "MotorWay.php";
require_once "Speedometer.php";

echo Speedometer::convertMilesToKm(88).'<br>';

echo Speedometer::convertKmToMiles(130).'<br>';

$test = new Pickup('red', 6, 'fuel');
try{
    $test->start();
} catch (Exception $e){
    echo $e->getMessage();
    $test->setParkBrake(false);
} finally{
    echo '<br>Ma voiture roule comme un donut';
}
$test->setEnergy('electric');
$conf = new FamilyCar('blue', 4, 'fuel');
$bike = new Bicycle('green', 1);
$way = new MotorWay();
$wayBike = new PedestrianWay();
$way->addVehicule($test);
$way->addVehicule($conf);
$way->addVehicule($bike);
$wayBike->addVehicule($bike);

var_dump($way);
var_dump($wayBike);