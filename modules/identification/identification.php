<?php

/* 
 * Ce fichier sert à l'identification de l'utilisateur.
 */

//On vérifie si le formulaire est soumis
$soumis = filter_input(INPUT_POST, "soumis", FILTER_VALIDATE_BOOLEAN);

if ($soumis === TRUE){
    
    $nom = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_STRING);
    $forceBrut = filter_input(INPUT_POST, "compte", FILTER_VALIDATE_INT);
    
    //Petite protection contre les "forces brutes".
    if ($forceBrut >= 5){
        sleep($forceBrut);
    }
    
    //On teste l'existence de lutilisateur.
    $sql = "SELECT * FROM `users` WHERE `email_users` LIKE :email AND `pwd_users` LIKE :pwd";
    //Tableau pour la requête.
    $array = [
        ":email" => $nom,
        ":pwd" => $pwd
    ];
    //Préparation de la requête
    $sql_prepare = $dbh->prepare($sql);
    try {
        $sql_prepare -> execute($array);
        $resultat = $sql_prepare -> fetchall(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        echo $ex;
        die ("<p>Connexion à la base de données impossible!</p>");
    }
    //Vérification des résultats.
    $text_compte = count($resultat);
    
    if ($text_compte != "1") {
        $message = '<p id="erreur">Identifiants de connexion invalides<p>';
        $compte = ++$forceBrut;
        
        $template = "./template/accueil.inc.php";
        $html = file_get_contents($template);

        $array_search = [
            "{{message}}",
            "{{compte}}"
        ];

        $array_replace = [
            $message,
            $compte
        ];

        $corps = str_replace($array_search, $array_replace, $html);
    
    } else {
	$_SESSION['nom'] = $nom;
	$message = '<script language="javascript">document.location.href="./index.php?page=contenu"</script>';
	header("Location:./index.php?page=ticket");
    }
    
} else {
    $template = "./template/accueil.inc.php";
    $html = file_get_contents($template);
    
    $compte = 1;
    $message = NULL;
    
    $array_search = [
        "{{message}}",
        "{{compte}}"
    ];
    
    $array_replace = [
        $message,
        $compte
    ];
    
    $corps = str_replace($array_search, $array_replace, $html);
}

//On affiche la page.
echo $corps;