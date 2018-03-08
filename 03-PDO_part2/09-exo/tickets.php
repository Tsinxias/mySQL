<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$bookings = $_POST['bookings'];
$delete = "DELETE FROM tickets WHERE bookingsId = '$bookings'";
$bdd->exec($delete);

header('Location: index.php');
 ?>
