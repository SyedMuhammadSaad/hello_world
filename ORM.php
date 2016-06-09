<?php
/**
 * ORM is implemented here
 */

/**
 * class Model is the table of the database
 */
class Model
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
     * user getter
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
     * user setter
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
class DB
{
    /**
     *connection made to connect to database
     * @var PhpPlatform 
     */
    private static $connection=null;
    /**
     * connect() connects with database
     */
    public static function connect()
    {
        $mysql_host='localhost';
        $mysql_user='root';
        $mysql_pass='';
        $mysql_db="mytestdatabase1";
        
        if (self::$connection==null) 
        {
            self::$connection=mysql_connect($mysql_host, $mysql_user, $mysql_pass);
            mysql_select_db($mysql_db);
        }
    }
    /**
     * runquery() executes the query.
     * @param string $query Query is passed to be executed
     * @return string
     */
    public function runquery($query)
    {
        DB::connect();
        $runquery=mysql_query($query)or die(mysql_error());
        return $runquery;
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
        $update_query="UPDATE testuser SET $col = '$newvalue' WHERE $col = '$where'";
        echo $update_query;
        if(DB::runquery($update_query))
        {
            return true;
        }
        else
        {
            die(mysql_error());
            return false;
        }
    }
    /**
     * Insert table
     * @param int $id user id
     * @param string $user user name
     * @param int $salary user salary
     * @return boolean
     */
    public function inserttable($id,$user,$salary)
    {
        $insert_query="INSERT INTO testuser VALUES ($id,'$user',$salary)";
        echo $insert_query;
        if(DB::runquery($insert_query))
        {
            return true;
        }
        else
        {
            die(mysql_error());
            return false;
        }
    }
    public function selecttable()
    {
        $select_query="SELECT * FROM testuser";
        if($result=DB::runquery($select_query))
        {
            while($query_row=  mysql_fetch_assoc($result))
            {
                $m=new Model;
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
}
?>

