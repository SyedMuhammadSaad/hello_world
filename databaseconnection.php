<?php       

function connectdb($dbname)
{
    $mysql_host='localhost';
    $mysql_user='root';
    $mysql_pass='';
    $mysql_db=$dbname;
        
    if (mysql_connect($mysql_host, $mysql_user, $mysql_pass)) 
    {
        if (mysql_select_db($mysql_db)) 
        {
            return 'Connected with db';
        }
    } 
    else 
    {
        return 'Connection Failed';
    }
}
        
echo connectdb('mytestdatabase1');
?>