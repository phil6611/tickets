<?php

/*
 * Ce fichier sert pour la connexion à la base de données.
 */

//Constante pour les préfixes de la base de données.
define ("PREFIXE", "");

//variables de connexion.
$user = '';
$pass = '';
$dsn = 'localhost';


//Connexion à la base de données.
try {
	$dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
	die ("Erreur ! :".$e->getMessage());
}

//Configuration de la gestion des erreurs.
$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//Conversion en utf-8.
$caractere = "SET NAMES utf8";
$jeucaracteres = $dbh->query($caractere);