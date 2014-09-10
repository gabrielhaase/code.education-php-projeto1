<?php
//----------------------------------------------------------------------------------------------------
$hostname = '';
$database = '';
$username = '';
$password = '';

try {
    $pdoConnection = new \PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8', $username ,$password );
} catch (\PDOException $e) {
    die("Error: ".$e->getCode() . ": " . $e->getMessage());
}
//----------------------------------------------------------------------------------------------------
