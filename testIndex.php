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
include 'databaseconnection.php';
include 'filing.php';
include 'calculator.php';
include 'socket.php';
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
    /**
     * Description: testing connection with db
     */
    public function testdatabaseconnection()
    {
        $res=  connectdb('mytestdatabase1');
        $this->assertEquals('Connected with db',$res);
    }
    /**
     * Description: Testing the filewrite function
     */
    public function testfilewrite()
    {
        $res=  filewrite();
        $this->assertEquals('File written',$res);
    }
    /**
     * Description: Checks for fileread function
     */
    public function testfileread()
    {
        $res=fileread('C:\xampp\htdocs\PhpProjectHello_World\filetext.txt');
        $this->assertEquals(true,$res);
    }
    /**
     * Description: Checking namespace
     */
    public function testnamespace()
    {
        $res= \calculator\namespacechecking();
        $this->assertEquals(true,$res);
    }
    /**
     * Description: Server Connecting to client
     */
    public function testsocketserver()
    {
        $res= socketserver('127.0.0.1');
        $this->assertEquals(true,$res);
    }
}
