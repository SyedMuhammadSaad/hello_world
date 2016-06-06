<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Inheritance implementation
 */
class Fruit
{
    /**
     *
     * @var string 
     */
    private $name;
    /**
     * Getting name of Fruit
     * @param string $n
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
class Apple extends Fruit
{
    /**
     * Setting name of Fruit
     * @param string $n
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

class Banana extends Fruit
{
    /**
     * Setting name of Fruit
     * @param string $n
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
