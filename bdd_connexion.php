<?php

//connexion à la base de données
	$dsn = 'mysql:host=localhost;dbname=valentine';
	$user = 'root';
	$pwd = 'Poupette11!';

//création de l'objet PDO qui représente la connexion à la bdd
	$pdo = new PDO($dsn, $user, $pwd, 
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);

	$pdo->exec('SET NAMES UTF8');