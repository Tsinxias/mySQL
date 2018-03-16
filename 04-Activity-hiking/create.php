<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
	require 'connect.php';

//----------user rights----------//
	session_start();
	if (!isset($_SESSION['username'])) {
		echo 'Pas d\'accès, veuillez vous connectez en tant qu\'administrateur !';
		die();
	}

} catch (PDOException $e) {
	print "Error !: " . $e->getMessage() . "<br/>";
	die();
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="add.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="number" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="number" name="height_difference" value="">
		</div>
		<div>
			<label for="available">Praticable</label>
			<input type="text" name="available" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>

	<?php
    if (isset($_GET['request'])) {
    	echo "La randonnée a bien été ajoutée avec succès!";
    }

	 ?>
</body>
</html>
