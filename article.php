<?php
session_start();
require('actions/questions/showArticleContentAction.php');
require('actions/questions/postAnswerAction.php');
require('actions/questions/showAllAnswersOfQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <div class="container">

        <?php
        if (isset($question_publication_date)) {
        ?>
            <section class="show-content">
                <h3><?= $question_title; ?></h3>
                <hr>
                <p><?= $question_content; ?></p>
                <hr>
                <small><?= $question_pseudo_author . ' ' . $question_publication_date; ?></small>
            </section>
            <br>
            <section class="show-answers">
                <form class="form-group" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Réponse :</label>
                        <textarea name="answer" class="form-control"></textarea>
                        <br>
                        <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                    </div>
                </form>

                <?php
                    while($answer = $getAllAnswersOfThisQuestion->fetch()) {
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <?= $answer['pseudo_auteur'];?>
                                </div>
                                <div class="card-body">
                                    <?= $answer['contenu'];?>
                                </div>
                            </div>
                            <br>
                        <?php
                    }
                ?>
            </section>

        <?php
        }
        ?>

    </div>

</body>

</html>