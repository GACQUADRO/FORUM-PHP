<?php require("actions/users/securityAction.php");
require("actions/questions/getInfosOfEditedQuestion.php");
require("actions/questions/editQuestionAction.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>



    <br><br>

    <div class="container">
        <?php if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        } ?>

        <?php
        if (isset($question_content)) {
        ?>



            <form method="POST">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
                    <input type="text" class="form-control" name="title" value="<?=$question_title; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
                    <textarea type="text" class="form-control" name="content"><?=$question_content; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="validate">Modifier la question</button>
            </form>
        <?php

        }
        ?>


    </div>



</body>

</html>