<?php
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentielWay.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'skateboard.php';


$theRoad = new MotorWay();
$route = new ResidentialWay();
$parc = new PedestrianWay();

$bike = new Bicycle('blue', 1);
$redkit = new Car("red", 7, "essence"); 

$route->addVehicle($redkit);
var_dump($route);

$parc->addVehicle($bike);
var_dump($parc);
