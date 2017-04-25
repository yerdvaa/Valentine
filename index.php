<?php
include 'src/bdd_connexion.php';

$template = 'html/accueil.html';

//sélection des catégories dans la navbar
	$categories = '
					SELECT *
					FROM categories
				  ';

	$query = $pdo->prepare($categories);
	$query->execute();

	$liste_categories = $query->fetchAll();

include 'html/layout.html';