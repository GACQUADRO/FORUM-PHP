<?php
require('actions/database.php');

//recup id de l'user
if(isset($_GET['id']) AND !empty($_GET['id'])) {

    $idOfUser = $_GET['id'];

    //verif si l'user existe
    $checkIfUserExists = $bdd->prepare('SELECT pseudo, lastname, firstname FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if($checkIfUserExists->rowCount() > 0) {

        //recup toutes les données de l'user
        $usersInfos = $checkIfUserExists->fetch();

        $user_pseudo = $usersInfos['pseudo'];
        $user_lastname = $usersInfos['lastname'];
        $user_firstname = $usersInfos['firstname'];

        //recup toues les questions de l'user
        $getHisQuestion = $bdd->prepare('SELECT * FROM questions  WHERE id_auteur = ? ORDER BY id DESC');
        $getHisQuestion->execute(array($idOfUser));
    }

} else {
    echo "Aucun utilisateur trouvé";
}