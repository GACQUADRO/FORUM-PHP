<?php

require("actions/database.php");

//Check for register
if(isset($_POST["validate"])){
    //Chech if user complete the form
    if(!empty($_POST["pseudo"]) && !empty($_POST["lastname"]) && !empty($_POST["firstname"]) && !empty($_POST["passwd"])){

        //user data
        $user_pseudo = htmlspecialchars($_POST["pseudo"]);
        $user_lastname = htmlspecialchars($_POST["lastname"]);
        $user_firstname = htmlspecialchars($_POST["firstname"]);
        $user_passwd = password_hash($_POST["passwd"], PASSWORD_DEFAULT);

        //Check if user exists
        $checkIfUserAlreadyExists = $bdd->prepare("SELECT pseudo FROM users WHERE pseudo = ?");
        $checkIfUserAlreadyExists-> execute(array($user_pseudo));
        if($checkIfUserAlreadyExists->rowCount() == 0){
            //add user in database
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, lastname, firstname, passwd) VALUES (?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo,$user_lastname,$user_firstname,$user_passwd));

            //get user data
            $getInfosOfThidUserReq =$bdd->prepare('SELECT id, pseudo, lastname, firstname FROM users WHERE lastname = ? && firstname = ? && pseudo = ?');
            $getInfosOfThidUserReq->execute(array($user_lastname,$user_firstname,$user_pseudo));

            $userInfos = $getInfosOfThidUserReq->fetch();

            //authenticate user on the site and get user data un global variable
            $_SESSION["auth"] = true;
            $_SESSION["id"] = $userInfos["id"];
            $_SESSION["lastname"] = $userInfos["lastname"];
            $_SESSION["firstname"] = $userInfos["firstname"];
            $_SESSION["pseudo"] = $userInfos["pseudo"];

            //redirect user to home page
            header("Location: index.php");


        }else {
            $errorMsg ="L'utilisateur existe deja sur le site";
        }


    } else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}