<?php
include 'bdd_connexion.php';

$template = 'html/login.html';


	if(empty($_POST['pseudo']) == false)
	{
		//récupération du pseudo et password
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

		/*if($loginInBdd == false)
		{
			echo '<main><p><strong>Login ou mot de passe incorrect !</strong></p></main>';
		}
		else*/
		if($loginInBdd == true)
		{
			header('Location: admin.php');
			exit();
		}
		/* 
				session_start();
				$_SESSION['id'] = $loginInBdd['id'];
				$_SESSION['pseudo'] = $loginInBdd['pseudo'];
		*/
			    
	}

	


include 'html/layout.html';