<?php
session_start();
require('actions/questions/showAllQuestionsAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
        <form method="GET">
            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </div>
            </div>
        </form>
        <br>

        <?php
        while ($question = $getAllQuestions->fetch()) {
        ?>
            <div class="card">
                <div class="card-header">
                    <a href="article.php?id=<?= $question['id']; ?>"> 
                        <?= $question['titre']; ?> 
                    </a>
                </div>
                <div class="card-body">
                <p class="card-text"><?php
                    if (strlen($question['contenu']) >200) {
                        echo mb_strimwidth($question['contenu'], 0, 200, "...");
                    } else {
                        echo $question['contenu'];
                    }
                     ?> </p>
                </div>

                <div class="card-footer">
                Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                </div>
                <?php if ($_SESSION['pseudo'] == 'admin') {?>
                    <a href="edit-question.php?id=<?= $question['id'] ?>" class="btn btn-warning">Modifier l'article</a>
                    <a href="actions/questions/deleteQuestionAction.php?id=<?= $question['id'] ?>" class="btn btn-danger">Supprimer l'article</a><?php
                }
                ?>
            </div>
            <br>
        <?php
        }
        ?>

    </div>

</body>

</html>