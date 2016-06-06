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
include 'socketclient.php';
include 'inheritance.php';
include 'interface.php';
include 'classes.php';
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
        echo "In testdatabaseconnection";
    }
    /**
     * Description: Testing the filewrite function
     */
    public function testfilewrite()
    {
        echo "In testfilewrite";
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
        echo "In testfileread";
    }
    /**
     * Description: Checking namespace
     */
    public function testnamespace()
    {
        $res= \calculator\namespacechecking();
        $this->assertEquals(true,$res);
        echo "In testnamespace";
    }
    /**
     * Description: Server Connecting to client
     */
    public function testsocketserver()
    {
        $res= socketserver('127.0.0.1');
        $this->assertEquals(true,$res);
        echo "In testsocketserver";
    }
    /**
     * Description: Client Connecting to seerver by ip address
     */
    public function testsocketclient()
    {
        $res= clientsocket('127.0.0.1');
        $this->assertEquals(true,$res);
        echo "In testsocketclient";
    }
    /**
     * Testing Abstract Class
     */
    public function testabstract()
    {
        $subaruCarFrame = new CarsFrame;
        $this->assertEquals("Subaru",$subaruCarFrame->draw('Subaru'));
        //echo "<br/>";
        //$subaruCarFrame->buildframe();
        //echo "<br/>";
        echo "In testabstract";
    }
    /**
     * Testing Interface Class
     */
    public function testinterface()
    {
        $hondaBike = new RoadBike;
        $this->assertEquals("Honda",$hondaBike->typeOfFrame('Honda'));
        //echo "<br/>";

        $yamahaBike = new MountainBike;
        $this->assertEquals("Yamaha",$yamahaBike->typeOfFrame('Yamaha'));
        //echo "<br/>";
        echo "In testinterface";
    }
    /**
     * Testing Inheritance
     */
    public function testinheritance()
    {
        $fruitapple = new Apple;
        $this->assertEquals("Apple",$fruitapple->setname("Apple"));
        //echo "<br/>";
        $fruitapple->printname();
       // echo "<br/>";
        $fruitapple->fruitproperty();
        //echo "<br/>";

        $fruitbanana = new Banana();
        $this->assertEquals("Banana",$fruitbanana->setname("Banana"));
       // echo "<br/>";
        $fruitbanana->printname();
        //echo "<br/>";
        $fruitbanana->fruitproperty();
       // echo "<br/>";
        echo "In testinheritance";
    }
    
    /**
     * Testing Polymorphism
     */
    public function testpolymorphism()
    {
        $fruits= new Fruit;
        $fruits = array("","");
        $fruits[0]=new Apple;
        $this->assertEquals("Apple",$fruits[0]->setname("Apple"));
        $fruits[0]->printname();
        //echo "<br/>";
        $fruits[0]->fruitproperty();
        //echo "<br/>";

        $fruits[1]=new Banana;
        $this->assertEquals("Banana",$fruits[1]->setname("Banana"));
        $fruits[1]->printname();
        //echo "<br/>";
        $fruits[1]->fruitproperty();
        //echo "<br/>";
        echo "In testpolymorphism";
    }
}
