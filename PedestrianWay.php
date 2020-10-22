<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;
    
    public function addVehicle(object $vehicle)
    {
    $currentVehicles =[];
    if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
        $this->currentVehicles[] = array_push($currentVehicles, $vehicle);
    }
}

}