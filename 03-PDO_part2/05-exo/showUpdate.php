<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$title = $_POST['title'];
$artist = $_POST['artist'];
$date = $_POST['date'];
$showtype = $_POST['showtype'];
$genre1 = $_POST['genre1'];
$genre2 = $_POST['genre2'];
$duration = $_POST['duration'];
$startTime = $_POST['startTime'];

$sql = "UPDATE shows
        SET title = '$title', performer = '$artist', `date` = '$date', showTypesId = '$showtype', firstGenresId = '$genre1', secondGenreId = '$genre2', duration = '$duration', startTime = '$startTime'
        WHERE title = '$title'";
$request = $bdd->prepare($sql);

$request->execute();

header('Location: index.php');
 ?>
