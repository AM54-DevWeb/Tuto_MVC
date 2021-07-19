<?php

require_once("./controller/UtilisateurController.php");

$partiesUrl = explode("/",$_GET["page"]);
$partieControlleur = $partiesUrl[0];
$partieMethode = $partiesUrl[1];

$nomControlleur = "\\controller\\".ucfirst($partieControlleur)."Controller";
//"\controller\UtilisateurController" comme résultat si on tape "utilisateur" dans l'url

$controller = new $nomControlleur();
//"$controller = new $UtilisateurControlleur();" comme résultat

$controller->$partieMethode();

?>