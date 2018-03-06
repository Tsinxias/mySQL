<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$sql = "INSERT INTO shows (title, performer, `date`, showTypesId, firstGenresId, secondGenreId, duration, startTime)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$request = $bdd->prepare($sql);

$title = $_POST['title'];
$artist = $_POST['artist'];
$date = $_POST['date'];
$showtype = $_POST['showtype'];
$genre1 = $_POST['genre1'];
$genre2 = $_POST['genre2'];
$duration = $_POST['duration'];
$startTime = $_POST['startTime'];


$request->execute(array($title, $artist, $date, $showtype, $genre1, $genre2, $duration, $startTime));

header('Location: index.php');
 ?>
