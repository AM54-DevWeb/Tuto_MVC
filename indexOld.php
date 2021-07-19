<?php
require_once('./model/Utilisateur.php');

use model\Utilisateur;

$connexion = new PDO('mysql:host=localhost:3306;dbname=cci_dwwm_2021_2', 'root', '');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultat = $connexion->query("SELECT * FROM utilisateur");

$listeUtilisateurBdd = $resultat->fetchAll();
$listeUtilisateurObjet = [];

foreach ($listeUtilisateurBdd as $utilisateurBdd) {

    /*$utilisateur = new Utilisateur(
        $utilisateurBdd['nom'],
        $utilisateurBdd['prenom'],
        $utilisateurBdd['age']
    );*/
    $utilisateur = new Utilisateur();
    $utilisateur->setNom($utilisateurBdd['nom']);
    $utilisateur->setPrenom($utilisateurBdd['prenom']);
    $utilisateur->setAge($utilisateurBdd['age']);

    $listeUtilisateurObjet[] = $utilisateur;
}

//..........

foreach ($listeUtilisateurObjet as $utilisateur) {
    echo $utilisateur->nomComplet();
    echo "<br>";
}