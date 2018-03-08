<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));



// $sql = "UPDATE clients
//         SET lastName = '$lastname', firstName = '$firstname', birthDate = '$birthdate', card = '$card', cardNumber = '$cardnumber'
//         WHERE id ='$id'";
if (empty($_POST['cardnumber']) || $_POST['cardnumber'] == '' || $_POST['cardnumber'] == NULL) {
  $sql = "UPDATE clients (lastName, firstName, birthDate, card)
          VALUES (?, ?, ?, ?)
          WHERE id ='5'";
} else {
  $sql = "UPDATE clients (lastName, firstName, birthDate, card, cardNumber)
          VALUES (?, ?, ?, ?, ?)
          WHERE id ='5'";
}
$request = $bdd->prepare($sql);

$id = $_POST['id'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$card = $_POST['card'];
if ($card == '1' && !empty($_POST['cardnumber'])) {
  $cardnumber = $_POST['cardnumber'];
} else {
  $cardnumber = 'NULL';
}

$request->bindParam(':lastname', $lastname, PDO::PARAM_STR);
$request->bindParam(':firstname', $firstname, PDO::PARAM_STR);
$request->bindParam(':birthdate', $birthdate, PDO::PARAM_INT);
$request->bindParam(':card', $card, PDO::PARAM_INT);
if (!empty($_POST['cardnumber'])) {
  $request->bindParam(':cardnumber', $cardnumber, PDO::PARAM_INT);
}

// $request->execute();
if (empty($_POST['cardnumber']) || $_POST['cardnumber'] == '' || $_POST['cardnumber'] == NULL) {
  $request->execute(array($lastname, $firstname, $birthdate, $card));
} else {
  $request->execute(array($lastname, $firstname, $birthdate, $card, $cardnumber));
}
var_dump($_POST);
 ?>
