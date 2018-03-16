<?php
//Check if credentials are valid
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
	require 'connect.php';

	$login = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user
					WHERE username = '$login' AND password = '".sha1($password)."'";
	$request = $bdd->query($sql);
	$row = $request->fetch(PDO::FETCH_ASSOC);

	if (!empty($login) && !empty($password)) {
		if ($login == $row['username'] && sha1($password) == $row['password']) {
			session_start();
			$_SESSION['username'] = $login;
			$_SESSION['password'] = sha1($password);
			header('Location: read.php');
		}
		else {
			header('Location: login.php?noConnection="no"');
		}
	} else {
		header('Location: login.php?fillIn="no"');
	}

} catch (PDOException $e) {
	print "Error !: " . $e->getMessage() . "<br/>";
	die();
}
?>
