<?php
/*
 * Ce fichier sert pout détruire une session et déconnecter l'utilisateur.
 */
session_start();

	session_destroy();
	unset($_SESSION);
	header("Location:../index.php");