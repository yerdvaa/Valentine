<?php
include 'src/bdd_connexion.php';

$template = 'html/produits.html';

//sélection des catégories dans la navbar
	$categories = '
					SELECT *
					FROM categories
				  ';

	$query = $pdo->prepare($categories);
	$query->execute();

	$liste_categories = $query->fetchAll();

//récupération de l'id de la catégorie en vue d'afficher les produits liés à la catégorie
	$id_cat = $_GET['Id'];
	//var_dump($id_cat);

// Afficher la liste des produits selon la catégorie sélectionnée
	$produits = '
					SELECT *
					FROM produits
					WHERE categorie_id = ?
				';

	$query = $pdo->prepare($produits);
	$query->execute(array($id_cat));

	$liste_produits = $query->fetchAll();


include 'html/layout.html';