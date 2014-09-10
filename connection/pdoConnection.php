<?php
//----------------------------------------------------------------------------------------------------
$hostname = 'localhost';
$database = 'code.education-PHP';
$username = 'root';
$password = '70ga221002';

try {
    $pdoConnection = new \PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8', $username ,$password );
} catch (\PDOException $e) {
    die("Error: ".$e->getCode() . ": " . $e->getMessage());
}
//----------------------------------------------------------------------------------------------------
