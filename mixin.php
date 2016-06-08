<?php
/**
 * Mixin implemented
 */

/**
 * Playing Outdoor Game in this trait.
 */
trait OutdoorGame
{
    /**
     * Playinh Football.
     * @return string
     */
    public function playingoutside()
    {
        return "Playing Football at the moment.";
    }
}
/**
 * Playing Indoor Game in this trait.
 */
trait IndoorGame
{
    /**
     * Playinh Fifa.
     * @return string
     */
    public function playinginside()
    {
        return "Playing Fifa at the moment.";
    }
}
?>

