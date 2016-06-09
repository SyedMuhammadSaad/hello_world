<?php
/**
 * Interface implemented here.
 */

/**
 * Interface Implemented. MotorCycleFrame is interface
 */
interface MotorCycleFrame
{
    /**
     * Pure virtual function in interface class
     * @param string $param
     */
    public function typeOfFrame($param);
}
/**
 * MountainBike implements from MotorCycleFrame
 */
class MountainBike implements MotorCycleFrame
{
    /**
     * Brand name goes here.
     * @var string 
     */
    private $brandName;
    /**
     * Printing some lines
     * @param string $name
     * @return string
     */
    public function typeOfFrame($name) {
        $brandName=$name;
        echo "$brandName bike makes Mountain Bikes.";
        return $brandName;
    }
    
}
/**
 * RoadBike implements from MotorCycleFrame
 */
class RoadBike implements MotorCycleFrame
{
    /**
     * Brand name goes here.
     * @var string
     */
    private $brandName;
    /**
     * Printing some lines
     * @param string $name
     * @return string
     */
    public function typeOfFrame($name) {
        $brandName=$name;
        echo "$brandName bike makes Road Bikes.";
        return $brandName;
    }
}
?>
