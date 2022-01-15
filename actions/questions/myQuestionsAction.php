<?php

require('actions/database.php');

$getAllMyQuestions = $bdd->prepare("SELECT id,titre, contenu FROM questions WHERE id_auteur = ? ORDER BY id DESC");
$getAllMyQuestions->execute(array($_SESSION['id']));



