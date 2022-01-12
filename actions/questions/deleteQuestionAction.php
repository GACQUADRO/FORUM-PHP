<?php

session_start();
if(!isset($_SESSION['auth'])) {
    header('Location: ../../login.php');
}

require('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $idOfTheQuestion = $_GET['id'];
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0) {
        $usersInfos = $checkIfQuestionExists->fetch();
        if($usersInfos['id_auteur'] == $_SESSION['id']) {
            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            header('Location: ../../my-questions.php');

        } else {
            echo "Vous n'avez pas les droit de supprimer cette question";
        }

    } else {
        echo "Aucune question n'a été trouver";
    }
} else {
    echo "Aucune question n'a été trouver";
}