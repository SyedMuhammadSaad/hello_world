<?php
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
     *Name of a child.
     * @var string 
     */
    private $name;
    /**
     * Checking if mixin works.
     * @var boolean
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
    public function check()
    {
        return $this->bool;
    }
    
}

?>
