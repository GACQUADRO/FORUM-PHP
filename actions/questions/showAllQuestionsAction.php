<?php
require('actions/database.php');

// recup les questions par default
$getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, contenu, pseudo_auteur, date_publication FROM questions ORDER BY id DESC LIMIT 0,5');

// verif si il a une recherche
if(isset($_GET['search']) AND !empty($_GET['search'])) {
    //la recherche
    $usersSearch = $_GET['search'];
    //chop tous les info via la recherche par rapport au titre
    $getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, contenu, pseudo_auteur, date_publication FROM questions WHERE titre LIKE "%'.$usersSearch.'%" ORDER BY id DESC');
}