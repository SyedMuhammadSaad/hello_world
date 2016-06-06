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
     * Print name
     */
    public function printname()
    {   
    }
}
class Apple extends Fruit
{
    /**
     * Getting name of Fruit
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
     * Printing Name
     */
    public function printname() 
    {
        parent::printname();
        echo "I am an $this->name";
    }
    /**
     * Printing Property
     */
    public function fruitproperty()
    {
        echo "I am full of iron";
    }
    
}

class Banana extends Fruit
{
    /**
     * Getting name of Fruit
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
     * Printing Name
     */
    public function printname() 
    {
        parent::printname();
        echo "I am a $this->name";
    }
    /**
     * Printing Property
     */
    public function fruitproperty()
    {
        echo "I am full of magnesium";
    }
    
}


$fruitapple = new Apple;
$fruitapple->setname("Apple");
echo "<br/>";
$fruitapple->printname();
echo "<br/>";
$fruitapple->fruitproperty();
echo "<br/>";

$fruitbanana = new Banana();
$fruitbanana->setname("Banana");
echo "<br/>";
$fruitbanana->printname();
echo "<br/>";
$fruitbanana->fruitproperty();
echo "<br/>";

echo "<br/>";
$fruits= new Fruit;
$fruits = array("","");
$fruits[0]=new Apple;
$fruits[0]->setname("Apple");
$fruits[0]->printname();
echo "<br/>";
$fruits[0]->fruitproperty();
echo "<br/>";

$fruits[1]=new Banana;
$fruits[1]->setname("Banana");
$fruits[1]->printname();
echo "<br/>";
$fruits[1]->fruitproperty();
echo "<br/>";

?>
