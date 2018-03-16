<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
	require 'connect.php';

	$hike = $_GET['hike'];
	$select = "SELECT * FROM hiking WHERE id = '$hike'";
	$prepare = $bdd->query($select);
	$row = $prepare->fetch(PDO::FETCH_ASSOC);

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
	<h1>Modifier</h1>
	<form action="manipulate-data.php" method="POST" enctype="multipart/form-data">
		<div>
			<input type="hidden" name="hikeID" value="<?php echo $_GET['hike']; ?>">
			<label for="name">Name</label>
			<input type="text" name="name" value="<?php echo $row['name']; ?>">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<!-- opérateur ternaire -->
				<option value="très facile" <?php echo ($row['difficulty'] == "très facile") ? 'selected' : ""; ?>>Très facile</option>
				<option value="facile" <?php echo ($row['difficulty'] == 'facile') ? 'selected' : ""; ?>>Facile</option>
				<option value="moyen" <?php echo ($row['difficulty'] == 'moyen') ? 'selected' : ""; ?>>Moyen</option>
				<option value="difficile" <?php echo ($row['difficulty'] == 'difficile') ? 'selected' : ""; ?>>Difficile</option>
				<option value="très difficile" <?php echo ($row['difficulty'] == 'très difficile') ? 'selected' : ""; ?>>Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="number" name="distance" value="<?php echo $row['distance']; ?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="<?php echo $row['duration']; ?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="number" name="height_difference" value="<?php echo $row['height_difference']; ?>">
		</div>
		<div>
			<label for="available">Praticable</label>
			<input type="text" name="available" value="<?php echo $row['available']; ?>">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
