<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$id1 = $_POST['id1'];
$id2 = $_POST['id2'];

$deleteId1 = "DELETE FROM clients WHERE id = '$id1'";
$bdd->exec($deleteId1);

$deleteId2 = "DELETE FROM clients WHERE id = '$id2'";
$bdd->exec($deleteId2);

header('Location: index.php');
 ?>
