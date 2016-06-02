<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code 
        /**
         * Description: Connecting to database and returning the status
         * @param string $dbname
         * @return string
         */
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
    </body>
</html>
