<?php 
session_start();
require'db.php';

if (isset($_SESSION["username"]))
 {
   $admin = $_SESSION["username"];
   
 }
 else
 {
    header('location:connexion.php');
 }

$sql = 'SELECT * FROM serv';

$statement = $connexion->prepare($sql);

$statement->execute();

$person = $statement->fetchAll(PDO::FETCH_OBJ);

 ?>


<?php require 'header.php';?>

    <div class="container-fluid">
    		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"> ADMIN <?= ''.$admin ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="create.php">ajouter une personne</a>
      </li>
      <li class="nav-item active">
        <?='<a href="deconnection.php">deconnexion</a>'; ?> 
      </li>
      
    </ul>
    
  </div>
</nav>
    	
    	<div class="card mt-5">
    		
    		<div class="card-header">
    			<h2> LES RESERVATIONS</h2>
    		</div>
    		<div class="card-body">
    			
    			<table class="table table-bordered">

    				<tr>
    					<th>ID</th>
    					<th>service</th>
    					<th>nom</th>
    					<th>prenom</th>
    					<th>telephone</th>
                        <th>commune</th>
                        <th>quartier</th>
                        <th>email</th>
                        

                        <th>action</th>
    				</tr>

    				<?php foreach ($person as $membres):?>
    				<tr>
    					<td><?= $membres->id; ?></td>
    					<td><?=$membres->service; ?></td>
    					<td><?=$membres->nom; ?></td>
                        <td><?=$membres->prenom; ?></td>
    					<td><?=$membres->tel; ?></td>
                        <td><?= $membres->commune; ?></td>
                        <td><?=$membres->quartier; ?></td>
                        <td><?=$membres->email; ?></td>
                        <td>
    						<a href="edit.php?id=<?=$membres->id ?>" class="btn btn-info">MODIFIER</a>
    						<a onclick=" return confirm('voulez vous vraiment supprimer cette personne ?')" href="delet.php?id=<?=$membres->id ?>" class="btn btn-danger">SUPRIMER</a>
    					</td>
                    </tr>
    			<?php endforeach; ?>
    				
    			</table>

    		</div>

    	</div>

    </div>

<?php 



 ?>

<?php require 'footer.php'; ?>
