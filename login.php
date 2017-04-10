<?php
include 'bdd_connexion.php';

$template = 'html/login.html';

$user = $_POST['pseudo'];
$pwd  = $_POST['password'];

//recherche dans la bdd si l'user exist et si le mdp est correct
	$login = '
				SELECT *
				FROM users
				WHERE pseudo = ?
				AND password = ?
			 ';

	$query = $pdo->prepare($login);
	$query->execute([$user, $pwd]);

	$loginInBdd = $query->fetch();

	if(!$loginInBdd)
	{
		var_dump('raté !!!');
	}
	else
	{
		session_start();

	    $_SESSION['id'] = $resultat['id'];

	    $_SESSION['pseudo'] = $pseudo;

	    echo 'Vous êtes connecté !';
	}

include 'html/layout.html';