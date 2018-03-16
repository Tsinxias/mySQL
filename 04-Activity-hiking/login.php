<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h2>Log In</h2>
    <form action="check-login.php" method="post" enctype="multipart/form-data">
      <div>
        <label for="username">Identifiant</label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password">
      </div>
      <div>
        <button type="submit" name="button">Se connecter</button>
      </div>
    </form>

    <?php
      if (isset($_GET['fillIn'])) {
        echo 'Le formulaire n\'a pas été bien rempli';
      }
      if (isset($_GET['noConnection'])) {
        echo 'Membre non-reconnu';
      }
     ?>
  </body>
</html>
