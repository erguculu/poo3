<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public $nbLane = 2;
    public $maxSpeed = 50;

    public function addVehicle(object $vehicle)
{
    $currentVehicles =[];
    if ($vehicle instanceof Vehicle){
        $this->currentVehicles[] = array_push($currentVehicles, $vehicle);
    }
}

}
