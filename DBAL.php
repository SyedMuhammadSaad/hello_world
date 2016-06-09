<?php
/**
 * DBAL is implemented here
 */

/**
 * class Model is the table of the database
 */
class ModelDBAl
{
    /**
     *
     * @var int userid
     */
    private $id;
    /**
     *
     * @var string name of user
     */
    private $user;
    /**
     *
     * @var int salary of user
     */
    private $salary;
    /**
     * construct is left empty as setter and getter are implemented
     */
    function __construct() 
    {    
    }
    /**
     * id getter
     * @return int
     */
    function getId() 
    {
        return $this->id;
    }
    /**
     * username getter
     * @return string
     */
    function getUser() 
    {
        return $this->user;
    }
    /**
     * salary getter
     * @return int
     */
    function getSalary() 
    {
        return $this->salary;
    }
    /**
     * id setter
     * @param int $id userid
     */
    function setId($id) 
    {
        $this->id = $id;
    }
    /**
     * username setter
     * @param string $user user name
     */
    function setUser($user) {
        $this->user = $user;
    }
    /**
     * salary setter
     * @param int $salary user salary
     */
    function setSalary($salary) 
    {
        $this->salary = $salary;
    }
}
/**
 * Databse is cnnected here and differnet operations can be performed using its methods.
 */
class DBAL
{
    /**
     * Empty constructor
     */
    private function __construct()
    {    
    }
    /**
     *connection made to connect to database
     * @var PhpPlatform 
     */
    private static $connection=null;
    /**
     * connect() connects with database
     * @return PhpPlatform
     */
    public static function connect()
    {
        if (self::$connection==null) 
        {
            self::$connection=new PDO('mysql:host=localhost;dbname=mytestdatabase1','root','');
        }
        return self::$connection;
    }
    /**
     * runquery() executes the query.
     * @param string $query Query is passed to be executed
     * @return string
     */
    public function runquery($query)
    {
        DBAL::connect();
        $runquery=  self::$connection->query($query);
        return $runquery;
    }
    
    /**
     * Select all table
     */
    public function selecttable()
    {
        $select_query="SELECT * FROM testuser";
        if(DBAL::runquery($select_query))
        {
            $result=DBAL::runquery($select_query);
            while($query_row=$result->fetch())
            {
                $m=new ModelDBAl;
                $id=$query_row['id'];
                $m->setId($id);
                $user=$query_row['user'];
                $m->setUser($user);
                $salary=$query_row['salary'];
                $m->setSalary($salary);
                
                echo $m->getId().' '. $m->getUser().' '.$m->getSalary().'<br>';
            }
        }
    }
    /**
     * Update table
     * @param string $col column number
     * @param mixed $newvalue update value
     * @param string $where where to update
     * @return boolean
     */
    public function updatetable($col,$newvalue,$where)
    {
        $update_query="UPDATE testuser SET $col = ? WHERE $col = ?";
        $obj=DBAL::connect()->prepare($update_query)->execute([$newvalue,$where]);
        if($obj)
        {
            echo $update_query;
            return true;
        }
        else
        {
            return false;
        }
        
    }
}
?>

