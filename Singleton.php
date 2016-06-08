<?php

class Singleton
{
    /**
     *
     * @var Singleton
     */
    private static $object;
    /**
     * Empty constructor so it's use will not initialize the object.
     */
    private function __construct() 
    {
    }
    /**
     * Created object iff object is null.
     * @return boolean
     */
    public static function getObject()
    {
        if(static::$object===null)
        {
            static::$object=new Singleton;
            return true;
        }
        return false;
    }
    /**
     * __clone function is left empty so when called it cannot do any working
     */
    private function __clone() 
    {    
    }
    /**
     * __wakeup function is left empty so when called it cannot do any working
     */
    private function __wakeup() 
    {
    }
}

?>

