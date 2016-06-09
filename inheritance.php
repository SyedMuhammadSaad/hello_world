<?php
/**
 * Inheritance between Fruit and its child Apple and Banana is created here.
 */

/**
 * Inheritance implementation. Fruit class is Parent class
 */
class Fruit
{
    /**
     *
     * @var string Fruit name goes here. 
     */
    private $name;
    /**
     * Getting name of Fruit
     * @param string $n Name of fruit is passed to set.
     * @return string
     */
    public function setname($n) {
        $this->name=$n;
        return $this->name;
    }
    /**
     * Empy function
     */
    public function printname()
    {   
    }
}
/**
 * Child class of Fruit class
 */
class Apple extends Fruit
{
    /**
     * Setting name of Fruit
     * @param string $n Name of fruit is passed to set.
     * @return string
     */
    public function setname($n) 
    {
        parent::setname($n);
        $this->name=$n;
        return $this->name;
    }
    /**
     * Printing Name function overridden from parent class
     */
    public function printname() 
    {
        parent::printname();
        echo "I am an $this->name";
    }
    /**
     * Function declared in child class. Function is Printing Property of fruit.
     */
    public function fruitproperty()
    {
        echo "I am full of iron";
    }
    
}
/**
 * Child class of Fruit class
 */
class Banana extends Fruit
{
    /**
     * Setting name of Fruit
     * @param string $n Name of fruit is passed to set.
     * @return string
     */
    public function setname($n) 
    {
        parent::setname($n);
        $this->name=$n;
        return $this->name;
    }
    /**
     * Printing Name function overridden from parent class
     */
    public function printname() 
    {
        parent::printname();
        echo "I am a $this->name";
    }
    /**
     * Function declared in child class. Function is Printing Property of fruit.
     */
    public function fruitproperty()
    {
        echo "I am full of magnesium";
    }
    
}
?>
