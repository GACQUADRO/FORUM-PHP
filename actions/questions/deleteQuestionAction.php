<?php

session_start();
if(!isset($_SESSION['auth'])) {
    header('Location: ../../login.php');
}

require('../database.php');

//Verifier si l'id est rentre en parametre dans l'url
if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $idOfTheQuestion = $_GET['id'];
    //verif si la  question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0) {
        //recup les infos de la question
        $questionsInfos = $checkIfQuestionExists->fetch();
        if($questionsInfos['id_auteur'] == $_SESSION['id'] || $_SESSION['pseudo'] == 'admin' ) {
            //supp la question si c user = auteur de la question
            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));
            
            //redirection
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