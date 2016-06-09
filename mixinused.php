<?php
/**
 * A child class uses traits OutdoorGame and IndoorGame
 */

/**
 * A child class uses traits OutdoorGame and IndoorGame
 */
include 'mixin.php';

/**
 * Child class uses traits.
 */
class Child
{
    use OutdoorGame;
    use IndoorGame;
    
    /**
     *
     * @var string Name of a child.
     */
    private $name;
    /**
     * 
     * @var boolean Checking if mixin works.
     */
    private $bool=false;
    /**
     * Function uses traits' methods in it.
     * @param string $n Name of a child is passed here
     */
    public function playtime($n)
    {
        $this->name=$n;
        echo "$this->name is ";
        echo OutdoorGame::playingoutside();
        echo IndoorGame::playinginside();
        $this->bool=true;
    }
    /**
     * This function is used to perform test case. Returns true if playtime function is executed.
     * @return boolean
     */
    public function check()
    {
        return $this->bool;
    }
    
}

?>
