<?php
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
    /**
     *
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
class RoadBike implements MotorCycleFrame
{
    /**
     *
     * @var string
     */
    private $brandName;
    /**
     * Printing some lines
     * @param type $name
     * @return type
     */
    public function typeOfFrame($name) {
        $brandName=$name;
        echo "$brandName bike makes Road Bikes.";
        return $brandName;
    }
}
?>
