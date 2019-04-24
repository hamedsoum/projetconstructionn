<?php 

require'db.php';

$id = $_GET['id'];

$sql = 'DELETE FROM serv WHERE id = :id';

$statement = $connexion->prepare($sql);

if($statement->execute([':id' => $id])){
	header('Location:espaceadmin.php');
}

 ?>