<?php
try {
	$databaseName = 'code.education-PHP';
	$username = 'root';
	$password = '70ga221002';
    $pdoConnection = new \PDO('mysql:host=localhost;dbname='.$databaseName.';charset=utf8', $username ,$password );
} catch (\PDOException $e) {
    die("Error: ".$e->getCode() . ": " . $e->getMessage());
}
