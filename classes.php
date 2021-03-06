<?php
/**
 * Abstract classes are implemented here.
 */

/**
 * Abstract Frame class
 */
abstract class Frame
{
    /**
     * Empty Function in Frame class
     * @param string $param
     */
    public function draw($param)
    {}
    /**
     * Function which is not being used in any other class
     */
    public function buildframe()
    {
        echo "From Frame class!";
    }
}
/**
 * CarsFrame is extended from abstract Frame class
 */
class CarsFrame extends Frame
{
    /**
     *Name of brand goes here.
     * @var string
     */
    private $brandName;
    /**
     * Function being used from abstract class
     * @param string $name
     * @return string
     */
    public function draw($name) {
        parent::draw($name);
        $brandName=$name;
        echo "$brandName car frame built.";
        return $brandName;
    }
}
?>
