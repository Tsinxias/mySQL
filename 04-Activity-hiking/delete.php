<?php
/**** Supprimer une randonnée ****/
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  try {
    require 'connect.php';

    $hikeID = $_GET['hike'];
    $sql="DELETE FROM hiking WHERE id = '$hikeID'";

    $request = $bdd->prepare($sql);

    $request->execute();

    header('Location: read.php?request=success');
  } catch (PDOException $e) {
    print "Error !: " . $e->getMessage() . "<br/>";
    die();
  }
 ?>
