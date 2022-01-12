<?php
session_start();
require('actions/users/showOneUsersProfileAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <div class="container">
        <?php
        if (isset($getHisQuestion)) {
        ?>
            <div class="card">
                <div class="card-body">
                    <h4>@<?= $user_pseudo; ?></h4>
                    <hr>
                    <p><?= $user_lastname . ' ' . $user_firstname; ?></p>
                </div>
            </div>
            <br>

            <?php
            while ($question = $getHisQuestion->fetch()) {
            ?>
                <div class="card">
                    <div class="card-header">
                        <?= $question['titre'] ?>
                    </div>
                    <div class="card-body">
                        <?= $question['description'] ?>
                    </div>
                    <div class="card-footer">
                        Par <?= $question['pseudo_auteur'] ?> le <?= $question['date_publication'] ?>
                    </div>
                </div>
                <br>
        <?php
            }
        }
        ?>
    </div>

</body>

</html>