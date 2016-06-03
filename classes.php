<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Abstraction Performed
 */
abstract class Frame
{
    /**
     * Abstract Function
     * @param type $param
     */
    public function draw($param)
    {}
}

class CarsFrame extends Frame
{
    private $brandName;
    /**
     * Function being used from abstract class
     * @param string $name
     */
    public function draw($name) {
        parent::draw($name);
        $brandName=$name;
        echo "$brandName car frame built.";
    }
}

/**
 * Interface Implemented
 */
interface MotorCycleFrame
{
    /**
     * Pure virtual function in interface class
     * @param string $param
     */
    public function typeOfFrame($param);
}
class MountainBike implements MotorCycleFrame
{
    private $brandName;
    public function typeOfFrame($name) {
        $brandName=$name;
        echo "$brandName bike makes Mountain Bikes.";
    }
    
}
class RoadBike implements MotorCycleFrame
{
    private $brandName;
    public function typeOfFrame($name) {
        $brandName=$name;
        echo "$brandName bike makes Road Bikes.";
    }
}

$sunbaruCarFrame = new CarsFrame;
$sunbaruCarFrame->draw('Subaru');

$hondaBike = new RoadBike;
$hondaBike->typeOfFrame('Honda');

$yamahaBike = new MountainBike;
$yamahaBike->typeOfFrame('Yamaha');

?>
