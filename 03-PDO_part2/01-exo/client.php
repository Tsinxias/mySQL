<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$sql = "INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber)
        VALUES (?, ?, ?, ?, ?)";

$request = $bdd->prepare($sql);

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$card = $_POST['card'];
if ($card == '1' && $_POST['cardnumber'] != "") {
  $cardnumber = $_POST['cardnumber'];
} else {
  $cardnumber = NULL;
}

$request->execute(array($lastname, $firstname, $birthdate, $card, $cardnumber));

header('Location: index.php');

 ?>
