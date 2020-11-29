<?php

define('db_name','trabalho_1');
define('end', 'localhost');
define('user', 'root1');
define('password', '12344321');

try 
{
    $pdo = new PDO('mysql:host='.end.'; dbname='.db_name,user,password);
} 
catch (PDOException $e)
{
    echo "Database error, Error".$e->getMessage();
}
catch (Exception $e)
{
    echo "Unespected error, Error".$e->getMessage();
}



?>