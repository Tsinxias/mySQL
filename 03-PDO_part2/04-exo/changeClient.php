<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$card = $_POST['card'];
if ($card == '1' && !empty($_POST['cardnumber'])) {
  $cardnumber = $_POST['cardnumber'];
} else {
  $cardnumber = NULL;
}

$sql = "UPDATE clients SET lastName = '$lastname', firstName = '$firstname', birthDate = '$birthdate', card = '$card', cardNumber = '$cardnumber'
        WHERE lastName = '$lastname'";

$request = $bdd->prepare($sql);

// $request->bindParam(':lastname', $lastname);
// $request->bindParam(':firstname', $firstname);
// $request->bindParam(':birthdate', $birthdate);
// $request->bindParam(':card', $card);
// $request->bindParam(':cardnumber', $cardnumber);


// var_dump($_POST);


$request->execute();

header('Location: index.php');




// $lastname = $_POST['lastname'];
// $firstname = $_POST['firstname'];
// $birthdate = $_POST['birthdate'];
// $card = $_POST['card'];
// $cardnumber = $_POST['cardnumber'];
//
//
// $sql = "SELECT * FROM clients WHERE lastName = $lastname OR firstName = $firstname";
// $sqlUpdateBirthdate = "UPDATE clients SET birthDate = $birthdate";
// $sqlUpdateCard = "UPDATE clients SET card = $card";
// $sqlUpdateCardnumber = "UPDATE clients SET cardNumber = $cardnumber";
//
// $request = $bdd->query($sql);
// $i = 1;
// while ($row = $request->fetch()) {
//   $bddLastname . $i = $row['lastName'];
//   $bddFirstname . $i = $row['firstName'];
//   $i++;
//   echo "<p>$bddLastname . $i $bddFirstname . $i</p>";
// }
//
// if ($lastname == $bddLastname || $firstname == $bddFirstname) {
//   if (isset($_POST['birthdate'])) {
//     $$bdd->execute($sqlUpdateBirthdate);
//   }
//
//   if (isset($_POST['card'])) {
//     $$bdd->execute($sqlUpdateCard);
//   }
//
//   if (isset($_POST['cardnumber'])) {
//     $$bdd->execute($sqlUpdateCardnumber);
//   }
// }


 ?>
