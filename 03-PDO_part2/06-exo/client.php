<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// if (isset($_POST["cardnumber"])) {
//   $card = 1;
// } else {
//   $card = 0;
// };
// if ($_POST["cardnumber"] != "" && $card == 1) {
//   $card = $_POST["cardnumber"];
// } else {
//   $card = 'NULL';
// };

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];

$sql = "UPDATE clients SET lastName = '$lastname', firstName = '$firstname' WHERE id = '5'";


// $sql = "UPDATE clients SET lastName = '".$_POST['lastname']."', firstName = '".$_POST['firstname']."', birthDate = '".$_POST['birthdate']."', card = '".$_POST['card']."', cardNumber = '".$_POST['cardnumber']."'
//         WHERE id = '".$_POST['id5']."'";



$request = $bdd->prepare($sql);

// $request->bindParam(':lastname', $lastname);
// $request->bindParam(':firstname', $firstname);
// $request->bindParam(':birthdate', $birthdate);
// $request->bindParam(':card', $card);
// $request->bindParam(':cardnumber', $cardnumber, PDO::PARAM_INT);
// $request->bindParam(':id5', $id5);



// var_dump($_POST);

// $bdd->exec($sql);
$request->execute();

header('Location: index.php');
 ?>
