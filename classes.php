<?php
/**
 * Abstract Class
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

class CarsFrame extends Frame
{
    /**
     *
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
        return $this->brandName;
    }
}
?>
