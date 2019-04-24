<?php 
require'db.php';

 $id = $_GET['id'];

 $sql = 'SELECT * FROM serv WHERE id=:id';

 $statement = $connexion->prepare($sql);

 $statement->execute([':id' => $id]);

 $person = $statement->fetch(PDO::FETCH_OBJ);

if(!empty($_POST)){
  $service = ($_POST['service']);
  $nom = ($_POST['nom']);
  $prenom=($_POST['prenom']);
  $tel = ($_POST['tel']);
  $commune = ($_POST['commune']);
  $quartier = ($_POST['quartier']);
  $email = ($_POST['email']);
  
  $sql = 'UPDATE serv SET service=:service, nom=:nom, prenom=:prenom, tel=:tel, commune=:commune,  quartier=:quartier,email=:email WHERE id=:id';
  $statement = $connexion->prepare($sql);
  
  if ($statement -> execute([':service' => $service, ':nom' => $nom, ':prenom' => $prenom, ':tel' => $tel, ':commune' => $commune, ':quartier' => $quartier, ':email' => $email, ':id' => $id])) {
  	header("Location:index.php");
  }
} 

 ?>


 <?php require 'header.php'; ?>

<div class="container">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">ajouter une personne</a>
      </li>
      
    </ul>
    
  </div>
</nav>
	
	<div class="card mt-5">
	

		<div class="card-header">
			<h2>modification</h2>
		</div>

		<div class="card-body">
			<?php if (!empty($message)): ?>

				<div class="alert alert-success">
					
					<?= $message; ?>

				</div>

			<?php endif; ?>

				
			
			<form method="post">
				<div class="row form-group">
					<div class="col-md-6">
						<input value="<?= $person->service ?>" type="text" class="form-control"  name="service" placeholder="nom">
					</div>
					<div class="col-md-6">
						<input value="<?= $person->nom ?>" type="text" class="form-control"  name="nom" placeholder="">
                    </div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<input value="<?= $person->prenom?>" type="text" class="form-control" name="prenom"  placeholder="">
					</div>
					<div class="col-md-6">
						<input value="<?= $person->tel ?>" type="commune" class="form-control"  name="tel" placeholder="">
                    </div>
				</div>
                <div class="row form-group">
					<div class="col-md-6">
						<input value="<?= $person->commune ?>" type="text" class="form-control" name="commune" placeholder="">
					</div>
					<div class="col-md-6">
						<input value="<?= $person->quartier ?>" type="text" name="quartier" class="form-control" placeholder="">
                    </div>
				</div>
				 <div class="row form-group">
					<div class="col-md-6">
						<input value="<?= $person->email ?>" type="text" class="form-control" name="email" placeholder="">
					</div>
					
				</div>


				
				<button type="submit" class="btn btn-info form-control">creation de personne</button>
            </form>
        </div>

	</div>

</div>

<?php require 'footer.php'; ?>
