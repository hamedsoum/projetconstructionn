<?php 
$dsn = 'mysql:host=localhost;dbname=nanbul';
$username = 'root';
$password = '';



try
{
	$connexion = new PDO($dsn,$username,$password);
	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e)

{
	die($e->getmessage());
}



 ?>
