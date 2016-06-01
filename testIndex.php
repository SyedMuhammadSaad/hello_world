<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testIndex
 *
 * @author Saad
 */
class testIndex extends PHPUnit_Framework_TestCase{
    //put your code here
    public function testgarbage()
    {
        $a = 'Hello';
        $this->assertEquals('Hello',$a);
    }
}
