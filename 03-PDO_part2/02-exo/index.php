<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Exo 2</h2>

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
      <input id="radioYes" type="radio" name="card" value="1">Oui
      <input id="radioNo" type="radio" name="card" value="0" checked>Non
    <br>
    <!-- <div class="cardYes"> -->
      <label for="cardnumber"><strong>Si la carte est déjà dans le système, veuillez la renseigner ici</strong></label>
      <input type="text" name="cardnumber" value="" placeholder="Enter card number">
    <!-- </div> -->
    <br>

    <!-- <div class="cardNo"> -->
      <p><strong>Si vous devez la rajouter, remplissez ces cases : </strong></p>
      <label for="cardCreateNumber">Numéro de carte</label>
      <input type="number" name="cardCreateNumber" value="" placeholder="Enter card number">
      <br>

      <label for="cardtype">Type de carte</label>
      <input type="number" name="cardtype" value="">
    <!-- </div> -->
    <br>

    <button type="submit" name="button">submit</button>
  </form>

</body>
</html>
