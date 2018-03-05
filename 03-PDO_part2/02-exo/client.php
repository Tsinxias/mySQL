<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$sql = "INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber) VALUES (?, ?, ?, ?, ?)";
$request = $bdd->prepare($sql);


$sql2 = "INSERT INTO cards (cardNumber, cardTypesId) VALUES (?, ?)";
$request2 = $bdd->prepare($sql2);

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$card = $_POST['card'];
if ($card == '1' && $_POST['cardnumber'] != "") {
  $cardnumber = $_POST['cardnumber'];
} else if ($card == '1' && empty($_POST['cardnumber'])) {
  $cardnumber = $_POST['cardCreateNumber'];
  $createNumber = $_POST['cardCreateNumber'];
  $cardtype = $_POST['cardtype'];
  $request2->execute(array($createNumber, $cardtype));
}
else {
  $cardnumber = NULL;
}

$request->execute(array($lastname, $firstname, $birthdate, $card, $cardnumber));

header('Location: index.php');
 ?>
