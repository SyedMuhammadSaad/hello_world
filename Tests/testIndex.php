<?php
/**
 * All tests are performed in this file
 */

/**
 * All tests are performed in this file
 */
include '../functions.php';
require '../databaseconnection.php';
include '../filing.php';
include '../calculator.php';
include '../inheritance.php';
include '../interface.php';
include '../classes.php';
include '../FactoryMethod.php';
require '../Singleton.php';
include '../mixinused.php';
include '../ORM.php';
include '../DBAL.php';
//include 'socket.php';
//include 'socketclient.php';
/**
 * This class consists of all tests
 */
class testIndex extends PHPUnit_Framework_TestCase{
    
    /**
     * Intital test performed.
     */
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
    /*
    public function testsocketserver()
    {
        $res= socketserver('127.0.0.1');
        $this->assertEquals(true,$res);
        echo "In testsocketserver";
    }
    /**
     * Description: Client Connecting to seerver by ip address
     */
    /*
    public function testsocketclient()
    {
        $res= clientsocket('127.0.0.1');
        $this->assertEquals(true,$res);
        echo "In testsocketclient";
    }*/
    /**
     * Returning array of arrays to test testabstract class
     * @return array
     */
    public function dataprovidertestabstract()
    {
        return array(array(new CarsFrame,'Subaru'),array(new CarsFrame,'Honda')
            ,array(new CarsFrame,'Mercedes'));
        
    }
    /**
     * Testing Abstract Class
     * @param CarsFrame $class
     * @param string $testvalue
     * @dataProvider dataprovidertestabstract
     */
    public function testabstract($class,$testvalue)
    {
        $object = new $class;
        $this->assertEquals($testvalue,$object->draw('Subaru'));
    }
    /**
     * Returning array of arrays to test testInterface class
     * @return array
     */
    public function providertestInterface ()
    {
        return array(array(new RoadBike,"Honda","Honda"),array(new RoadBike,"Yamaha","Honda")
            ,array(new MountainBike,"Yamaha","Yamaha"),array(new MountainBike,"Honda","Yamaha"));
    }
    /**
     * Testing Interface Class
     * @param RoadBike|MountainBike $class
     * @param string $testvalue
     * @param string $expected
     * @dataProvider providertestInterface
     */
    public function testinterface($class,$testvalue,$expected)
    {
        $object = new $class;
        $this->assertEquals($testvalue,$object->typeOfFrame($expected));
    }
    /**
     * Returning array of arrays to test testinheritance class
     * @return array
     */
    public function providertestInheritance()
    {
        return array(array(new Apple,"Apple","Apple"),array(new Apple,"Apple","Banana")
            ,array(new Banana,"Banana","Banana"),array(new Banana,"Banana","Grapes"));
    }
    /**
     * Testing Inheritance
     * @param Apple|Banana $class
     * @param string $testvalue
     * @param string $expected
     * @dataProvider providertestInheritance
     */
    public function testinheritance($class,$testvalue,$expected)
    {
        $object = new $class;
        $this->assertEquals($testvalue,$object->setname($expected));
        $object->printname();
        $object->fruitproperty();
       
    }
    /**
     * Returning array of arrays to test testpolymorphism class
     * @return array
     */
    public function providertestpolymorphism()
    {
        $obj[]=new Fruit;
        $obj=array("Apple","Banana");
        return array(array("$obj[0]","Apple","Apple"),array("$obj[0]","Apple","Banana")
            ,array("$obj[1]","Banana","Banana"),array("$obj[1]","Banana","Apple"));
    }
    /**
     * Testing Polymorphism
     * @param Apple|Banana $class
     * @param string $testvalue
     * @param string $expected
     * @dataProvider providertestpolymorphism
     */
    public function testpolymorphism($class,$testvalue,$expected)
    {
        $object[]= new Fruit;
        $object = array(count($class));
        for($i=0;$i<count($class);$i++)
        {
            $object[$i]=new $class;
            $this->assertEquals($testvalue,$object[$i]->setname($expected));
            $object[$i]->printname();
            $object[$i]->fruitproperty();
        }  
    }
    /**
     * Returning array of arrays to test Factory Method
     * @return array
     */
    public function providertestFactMethPat()
    {
        return array(array("SuperMan",2,"Toy Soldier SuperMan"),array("Mercedes",1,"Toy Car Mercedes")
            ,array("Tweety",3,"Toy Stuff Tweety"),array("Mercedes",2,"Toy Car Mercedes"));
    }
    /**
     * Testing FactoryMethod
     * @param string $name
     * @param integer $option
     * @param string $expectresult
     * @dataProvider providertestFactMethPat
     */
    public function testFactMethPat($name,$option,$expectresult)
    {
        $object=ToyFactory::create($name, $option);
        $this->assertEquals($expectresult,$object->getname());
        echo $object->getname();
    }
    /**
     * Returning array of arrays to test Singleton Design Pattern
     * @return array
     */
    public function providertestSingletonPattern()
    {
        $object=null;
        return array(array($object),array($object));
    }
    /**
     * object is made to test singleton pattern
     * @param mixed $obj
     * @dataProvider providertestSingletonPattern
     */
    public function testSingletonPattern($obj)
    {
        $obj= Singleton::getObject();
        $this->assertEquals($obj,  $obj);
    }
    /**
     * Return array of arrays to check function testmixin
     * @return array
     */
    public function providertestmixin()
    {
        return array(array(true,"Child"),array(false,"Child"));
    }
    /**
     * Checking if mixin occurs successfully.
     * @param boolean $bool True/False if mixin works
     * @param Child $class Child is a class using traits in it.
     * @dataProvider providertestmixin
     */
    public function testmixin($bool,$class)
    {
        $object=new $class;
        $object->playtime("Messi");
        $this->assertEquals($bool,$object->check());
    }
    /**
     * Returning array of arrays to test testORM
     * @return array
     */
    public function providertestORM()
    {
        return array(array(8,"Akram",47000));
    }
    /**
     * Testing ORM
     * @param int $id1 userid
     * @param string $user1 username
     * @param int $salary1 usersalary
     * @dataProvider providertestORM
     */
    public function testORM($id1,$user1,$salary1)
    {
        $model = new Model;
        $model->setId($id1);
        $id=$model->getId();
        $model->setUser("$user1");
        $user=$model->getUser();
        $model->setSalary($salary1);
        $salary=$model->getSalary();
        $this->assertEquals(true,DB::inserttable($id, $user, $salary));
    }
    /**
     * Returning array of arrays to test testDBAL
     * @return array
     */
    public function providertestDBAL()
    {
        return array(array('user',"Hamid","Asad"),array('salary',40000,45000));
    }
    /**
     * Update table of DBAL
     * @param string $col column/attribute name
     * @param mixed $newvalue
     * @param mixed $where
     * @dataProvider providertestDBAL
     */
    public function testDBAL($col,$newvalue,$where)
    {
        $this->assertEquals(true,DBAl::updatetable($col,$newvalue,$where));
    }
}
?>