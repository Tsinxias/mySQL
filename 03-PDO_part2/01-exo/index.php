<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Client form</title>
</head>
<body>
  <h2>Exo 1</h2>
  <form class="" action="client.php" method="POST" enctype="multipart/form-data">
    <label for="lastname">Nom</label>
    <input required type="text" name="lastname" value="" placeholder="Enter Last Name">
    <br>

    <label for="firstname">Prénom</label>
    <input required type="text" name="firstname" value="" placeholder="Enter First Name">
    <br>

    <label for="birthdate">Date de naissance</label>
    <input required type="date" name="birthdate" value="">
    <br>

    <label for="card">Avez-vous une carte de fidélité ?</label>
      <input type="radio" name="card" value="1">Oui
      <input type="radio" name="card" value="0" checked>Non
    <br>

    <label for="cardnumber">Numéro de carte</label>
    <input type="text" name="cardnumber" value="" placeholder="Enter card number">
    <br>

    <button type="submit" name="button">submit</button>
  </form>

</body>
</html>
