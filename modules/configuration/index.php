<?php
session_start();
if (!$_SESSION['nom'] && !$_SESSION['pass']){
	header("Location:../index.php");
}