<?php require('actions/questions/myQuestionsAction.php');
require('actions/users/securityAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php"; ?>

<body>

    <?php include "includes/navbar.php"; ?>
    <br><br>
    <div class="container">

        <?php
        while ($question = $getAllMyQuestions->fetch()) {
        ?>
            <div class="card">
                <h5 class="card-header"> <?= $question["titre"]; ?></h5>
                <div class="card-body">

                    <p class="card-text"><?= $question['description'] ?> </p>
                    <a href="#" class="btn btn-warning">Accéder à l'article</a>
                    <a href="#" class="btn btn-warning">Modifier l'article</a>
                </div>
            </div>
            <br>
        <?php
        }

        ?>
    </div>

</body>

</html>