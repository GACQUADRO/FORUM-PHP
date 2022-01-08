<?php
require('actions/database.php');

if(isset($_POST["validate"])){
    //Chech if user complete the form
    if(!empty($_POST["pseudo"]) && !empty($_POST["passwd"])){

        //user data
        $user_pseudo = htmlspecialchars($_POST["pseudo"]);
        $user_passwd = htmlspecialchars($_POST["passwd"],intval(PASSWORD_BCRYPT));
        // intval(PASSWORD_BCRYPT) cast en int car sans prens un string et mais une erreur qui dit qu'il veut un int
        // par contre jsp si le bcrypt fonctionne correctement

     
        $checkIfUserAlreadyExists = $bdd->prepare("SELECT pseudo FROM users WHERE pseudo = ?");
        $checkIfUserAlreadyExists-> execute(array($user_pseudo));

        $checkIfUserAlreadyExists = $bdd->prepare("SELECT * FROM users WHERE pseudo = ?");
        $checkIfUserAlreadyExists->execute(array($user_pseudo));

        //Check if user exists
        if($checkIfUserAlreadyExists->rowCount()>0){
            $usersInfo = $checkIfUserAlreadyExists-> fetch();
            if(password_verify($user_passwd, $usersInfo["passwd"])){

                //authenticate user on the site and get user data un global variable
                $_SESSION["auth"] = true;
                $_SESSION["id"] = $userInfos["id"];
                $_SESSION["lastname"] = $userInfos["lastname"];
                $_SESSION["firstname"] = $userInfos["firstname"];
                $_SESSION["pseudo"] = $userInfos["pseudo"];

            //redirect user to home page
            header("Location: index.php");


            }else {
                $errorMsg = "Votre mot de passe est incorrect... ";
            }
            
        }else {
            $errorMsg = "Votre pseudo est incorrect... ";
        }
  



    } else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}