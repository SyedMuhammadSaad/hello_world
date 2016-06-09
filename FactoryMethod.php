<?php
/**
 * Factory Method being implemented.
 */

/**
 * CarToy makes car toys.
 */
class CarToy
{
    /**
     *
     * @var string Name of toy is to be mentioned here
     */
    private $name;
    /**
     * Constructor function
     * @param string $toyname Name of toy goes here.
     */
    public function __construct($toyname) {
        $this->name=$toyname;
    }
    /**
     * Getting name of toy.
     * @return string
     */
    public function getname()
    {
        return "Toy Car".' '.$this->name;
    }
}
/**
 * SoldierToy makes soldier toys.
 */
class SoldierToy
{
    /**
     *
     * @var string $toyname Name of toy goes here.
     */
    private $name;
    /**
     * Constructor function
     * @param string $toyname Name of toy goes here.
     */
    public function __construct($toyname) {
        $this->name=$toyname;
    }
    /**
     * Getting name of toy.
     * @return string
     */
    public function getname()
    {
        return "Toy Soldier".' '.$this->name;
    }
}
/**
 * StuffToy makes stuff toys.
 */
class StuffToy
{
    /**
     *
     * @var string $toyname Name of toy goes here.
     */
    private $name;
    /**
     * Constructor function
     * @param string $toyname Name of toy goes here.
     */
    public function __construct($toyname) {
        $this->name=$toyname;
    }
    /**
     * Getting name of toy.
     * @return string
     */
    public function getname()
    {
        return "Toy Stuff".' '.$this->name;
    }
}
/**
 * Factory Method ToyFactory makes Toy according to option given.
 */
class ToyFactory
{
    /**
     * ToyFactory makes toy according to option given to it or default a CarToy
     * @param string $name Name of factory goes here.
     * @param integer $option Option to choose which Toy to make
     * @return \SoldierToy|\StuffToy|\CarToy
     */
    public static function create($name,$option)
    {
        if($option===1)
        {
            return new CarToy($name);
        }
        else if($option===2)
        {
            return new SoldierToy($name);
        }
        else if($option===3)
        {
            return new StuffToy($name);
        }
        else
        {
            return new CarToy("McQueen");
        }
    }
}

?>
