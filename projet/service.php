<?php 
require'db.php';

$message = $mesage1 = '';

if(!empty($_POST)){

  $service = security($_POST['service']);
  $nom = security($_POST['nom']);
  $prenom=security($_POST['prenom']);
  $tel = security($_POST['tel']);
  $commune = security($_POST['commune']);
  $quartier = security($_POST['quartier']);
  $email = security($_POST['email']);
  $isSuccess= true;
  

  if (empty($service) OR empty($nom) OR empty($prenom) OR empty($tel) OR empty($commune) OR empty($quartier) OR empty($email)  ) {
  	$message1 = 'tous les champs doivent etre renseigné';
  	$isSuccess=false;
  }
    if ($isSuccess) {
  	$sql = 'INSERT INTO serv(service,nom,prenom,tel,commune,quartier,email) VALUES(:service,:nom, :prenom, :tel, :commune, :quartier, :email)';
  $statement = $connexion->prepare($sql);
  if ($statement -> execute([':service' => $service, ':nom' => $nom, ':prenom' => $prenom, ':tel' => $tel, ':commune' => $commune, ':quartier' => $quartier, ':email' => $email])) {
  	$message = "reservation reussie, nous vous contacterons pour la finalisation";
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
	<title>service</title>
</head>
<body>
	<?php 
     require'nav.php';
	 ?>

	<div class="container ">
		
        <form method="post" class="service">
        	<h1>RESERVER UN SERVICE</h1>
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
        	 <div class="form-group">
        		<label>type de service</label>
        		 <select class="form-control" name="service">
                  <option>maçonnerie</option>
                  <option>menuiserie</option>
                  <option>plomberie</option>
                   <option>carrelage</option>
                   
                </select>
        	</div>
	         <div class="form-group">
	         	<div class="">
	         	<label for="exampleInputPassword1">nom</label>
	            <input type="text" name="nom" class="form-control" id="exampleInputPassword1" placeholder="">
	            </div>
	            <div class="">
	         	<label for="exampleInputPassword1">Prenom</label>
	            <input type="text" name="prenom" class="form-control" id="exampleInputPassword1" placeholder="">
	            </div>
	         </div>
	         <div class="form-group">
	         	<div class="">
	         	<label for="exampleInputPassword1">téléphone</label>
	            <input type="" name="tel" class="form-control" id="exampleInputPassword1" placeholder="08000087">
	            </div>
	            <div class="">
	         	<label for="exampleInputPassword1">commune</label>
	            <input type="text" name="commune" class="form-control" id="exampleInputPassword1" placeholder="">
	            </div>
	         </div>
	         <div class="form-group">
	         	<div class="">
	         	<label for="exampleInputPassword1">quartier</label>
	            <input type="text" name="quartier" class="form-control" id="exampleInputPassword1" placeholder="">
	            </div>
	            <div class="">
	         	<label for="exampleInputPassword1">email</label>
	            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="hamedsoum@gmail.com">
	            </div>
	         </div>
            

        	<button type="submit" class="btn btn-primary form-control">Submit</button>

        </form>
	</div>

	<?php 	
      require'footer.php';
	 ?>

</body>
</html>