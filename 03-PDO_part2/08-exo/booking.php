<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$id = $_POST['bookingId'];
$delete = "DELETE FROM bookings WHERE id = '$id'";

$bdd->exec($delete);

header('Location: index.php');
 ?>
