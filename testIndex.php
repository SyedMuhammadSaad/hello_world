<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testIndex
 * Using Require/Include and Doing the testing
 * @author Saad
 */

include 'functions.php';
class testIndex extends PHPUnit_Framework_TestCase{
    //put your code here
    public function testgarbage()
    {
        $a = 'Hello';
        $this->assertEquals('Hello',$a);
    }
    /**
     * Description: testing function addnumbers
     */
    public function testaddnumbers()
    {
        $no1=3;
        $no2=1;
        $res=addnumbers($no1, $no2);
        $this->assertEquals(3,$res);
    }
    /**
     * Description: testing function addintstring
     */
    public function testaddintstring()
    {
        $res=addintstring();
        $this->assertEquals('420 is not stupid',$res);
    }
}
