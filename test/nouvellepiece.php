<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>D&eacute;finition de la nouvelle pi&egrave;ce</title>
		<link rel="stylesheet" type="text/css" href="./styles/smi.css" />
	</head>

	<body>
		<?php
			include("entete.html");
			$type=$_POST['type'];
		?>
		<section> 
			<br />
			<form action="ajoutpiece.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Information sur la pi&egrave;ce</legend>
					<label for="type"><strong>Type de la pi&egrave;ce à ajouter : <?php echo $type ?></strong></label>
					<input type="hidden" name="CodeType" value="<?php echo $type ?>" id ="type" />
					<br />
					<label for="libelle">  Libell&eacute; de la pi&egrave;ce : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="LibellePiece" id ="libelle" />
					<br />
					<label for="prix">  Tarif de la pi&egrave;ce (en &#8364;) : </label>
					<input type="text" name="TarifPiece" id ="prix" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrez" />
				</div>
			</form>
		</section>
	</body>
</html>
