<?php
$bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'toor', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$sql = 'SELECT lastName, firstName FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ASC';
$nb = $bdd->query($sql);

// --exo 1
// SELECT * FROM `clients`
//
// // --exo 2
// SELECT * FROM `showTypes`
//
// // -- exo 3
// SELECT * FROM clients LIMIT 20
//
// // -- exo 4
// SELECT * FROM clients WHERE card = "1"

echo "exo 5: <br><br>";
while ($row = $nb->fetch()) {
  echo "Nom: " . $row['lastName'] . "<br>";
  echo "Prénom: " . $row['firstName'] . "<br><br>";
}

$sql2 = 'SELECT `title`, `performer`, `date`, `startTime` FROM `shows`ORDER BY `title` ASC';
$nb2 = $bdd->query($sql2);

echo "exo 6: <br><br>";

while ($row = $nb2->fetch()) {
  echo $row['title'] . " par " . $row['performer'] . " le " . $row['date'] . " à " . $row['startTime'] . "<br><br>";
}

$sql3 = 'SELECT `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients`';
$nb3 = $bdd->query($sql3);

echo "exo 7: <br><br>";

while ($row = $nb3->fetch()) {
  echo "Nom: " . $row['lastName'] . "<br>";
  echo "Prénom: " . $row['firstName'] . "<br>";
  echo "Date de naissance: " . $row['birthDate'] . "<br>";
  if ($row['card']) {
    echo "Carte de fidélité: Oui" . "<br>";
  } else {
    echo "Carte de fidélité: Non" . "<br><br>";
  }
  if ($row['card']) {
    echo "Numéro de carte: " . $row['cardNumber'] . "<br><br>";
  }
}

 ?>
