<?php

require('actions/database.php');


//Check if post exists
if(isset($_GET['id']) && !empty($_GET["id"])){
    $idOfQuestion = $_GET["id"];

    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount()>0){
        $questionInfos = $checkIfQuestionExists->fetch();
        //chech if user can update this post
        if($questionInfos['id_auteur'] == $_SESSION['id']){

            $question_title = $questionInfos['titre'];
            $question_description = $questionInfos['description'];
            $question_content = $questionInfos['contenu'];


            //Pertinrent?? je sais pas.. je dois encore y réfléchier...... 
            $question_description =str_replace("<br />","",$question_description,);
            $question_description =str_replace("<br />","",$question_content,);
            $question_description =str_replace("<br />","",$question_title,);
            
        } else {
            $errorMsg = "Vous n'avez pas le droit de modifier ce poste.";
        }
           
        
     
    

    }else {
        $errorMsg = "Aucune question n'a été trouvée.";
    }

}else {
    $errorMsg = "Aucune question n'a été trouvée.";
}