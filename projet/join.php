<?php 	

require'db.php';

$message = $mesage1 = '';

if(!empty($_POST)){

  
  $nom = security($_POST['nom']);
  $prenom=security($_POST['prenom']);
  $tel = security($_POST['tel']);
  $commune = security($_POST['commune']);
  $quartier = security($_POST['quartier']);
  $domaine = security($_POST['service']);
  $isSuccess= true;
  

  if (empty($domaine) OR empty($nom) OR empty($prenom) OR empty($tel) OR empty($commune) OR empty($quartier)) {
  	$message1 = 'tous les champs doivent etre renseigné';
  	$isSuccess=false;
  }
    if ($isSuccess) {
  	$sql = 'INSERT INTO joinus(nom,prenom,commune,domaine,quartier,tel) VALUES(:nom, :prenom,:commune, :domaine, :quartier, :tel)';
  $statement = $connexion->prepare($sql);
  if ($statement -> execute([':nom' => $nom, ':prenom' => $prenom,':commune' => $commune, ':domaine' => $domaine, ':quartier' => $quartier,':tel' => $tel])) {
  	$message = "merci, nous vous contacterons dans les bref delais reussie";
  }
  
}
}

  function security($data){
  	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;

  }
  

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device_width, initiale-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>rejoignez nous</title>
</head>
<body>
<?php 
     require'nav.php';
?>
<div class="container">
	<div class="row join">
	<div class="col-md-6">
		<h2>joingez vous a notre equipe</h2>
		<p>Nous sommes constamment à la recherche de talents pour satisfaire les besoins grandissants de notre clientèle. Joignez-vous à nos professionnels, spécialistes en conception, directeurs, chargés de projet construction, estimateurs, personnel administratif, surintendants, contremaîtres et personnel de chantier qui répondent aux exigences de la conception-construction.</p>

	</div>
	<div class="col-md-6">
		   <div class="card mt-5 join">
		   	<div class="card-header">
		   		 <h3>rejoints nous maintenant</h3>
		   	</div>
		   	<?php if (!empty($message)): ?>

				<div class="alert alert-success">
					
					<?= $message; ?>

				</div>

			<?php endif; ?>
			<?php if (!empty($message1)): ?>

				<div class="alert alert-danger">

   		 	    <?= $message1 ?>
   		       </div>
				
			<?php endif ?>
		   	<div class="card-body">
		   		<form method="POST" >
			 
             <div class="form-group">
             	<input type="text" name="nom" class="form-control" placeholder="nom">
             </div>
             <div class="form-group">
             	<input type="text" name="prenom" class="form-control" placeholder="prenom">
             </div>
             <div class="form-group">
             	<input type="text" name="commune" class="form-control" placeholder="commune">
             </div>
             <div class="form-group" >
             	<select class="form-control" name="service">
                  <option>maçonnerie</option>
                  <option>menuiserie</option>
                  <option>plomberie</option>
                   <option>carrelage</option>
                   
                </select>
             </div>
             <div class="form-group">
             	<input type="text" name="quartier" class="form-control" placeholder="quartier">
             </div>
             <div class="form-group">
             	<input type="text" name="tel" class="form-control" placeholder="téléphone">
             </div>
             <div class="form-group">
             	<input type="submit" name="valider" class="form-control btn btn-info" placeholder="nom">
             </div>
		</form>
		   	</div>
		   </div>
		
		
	</div>
   </div>
</div>


<?php require'footer.php';?>
</body>
</html>