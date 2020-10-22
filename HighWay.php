<?php
abstract class HighWay
{
/**
 * @var array
 */
protected $currentVehicles;

/**
 * @var int
 */
protected $nbLane;

/**
 *@var int
 */
protected $maxSpeed;


public function getCurrentVehicles() : array
{
    return $this->currentVehicles;
}
public function setCurrentVehicles( $currentVehicles ) : void
{
    $this->currentVehicles = $currentVehicles;
}
public function getNbLane()
{
    return $this->$$nbLane;
}

public function setNbLane(int $nbLane): int
{
    $this->nbLane = $nbLane;
}
public function getMaxSpeed()
{
    return $this->$maxSpeed;
}

public function setMaxSpeed(int $maxSpeed): int
{
    $this->maxSpeed = $maxSpeed;
}


abstract public function addVehicle(object $vehicle);

}