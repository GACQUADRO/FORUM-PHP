<?php
require('actions/database.php');

//Check if we click on the bottom
if(isset($_POST['validate'])){

//Check if there isn't empty value
    if(!empty($_POST["title"]) && !empty($_POST["content"])){

        $new_question_title = htmlspecialchars($_POST['title']);
        $new_question_content =  nl2br(htmlspecialchars($_POST['content']));

        echo $new_question_title;
        //Add value to the database
        $editQuestionOnWebsite = $bdd->prepare("UPDATE questions SET titre = ?, contenu = ? WHERE id = ?");
        $editQuestionOnWebsite->execute(array($new_question_title,$new_question_content,$idOfQuestion));



        header('Location: my-questions.php');

    }else {
        $errorMsg = "Veuillez compléter dans tous les champs...";
    }



}