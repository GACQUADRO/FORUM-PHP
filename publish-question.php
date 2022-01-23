<?php 
    require('actions/users/securityAction.php'); 
    require('actions/questions/publishQuestionAction.php');

  


?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>

    <br><br>
    <form class="container" method="POST">

        <?php 
            if(isset($errorMsg)){ 
                echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
            <textarea type="text" class="form-control" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>
        <a href="index.php"><p>Retour</p></a>
   </form>
</body>
<style>
            body,
      html {
        /* background-image:url('https://cdn.wallpapersafari.com/83/61/3MbidN.gif'); background-repeat:repeat; */
        background-size: cover;
        background-color: #040F16 !important;
        /* background-position: fixed; */
        /* background-repeat: no-repeat; */
        /* background-attachment: fixed;
          background-position: bottom; */
      }
      .form-label{
          color:#8497b0;
      }
      .btn{
        background-color: #0B4F6C !important;
      }
      .form-control {
        background-color: #2b4157 !important;
        color:#8497b0;
      }
      .Connect {
        margin-top: 3%;
        color: #8497b0;
      }
      #Connect {
        position: fixed;
        margin-left: 1%;
        margin-top: 100mm !important;
      }
      .ExpiredSessionWarning {
          width: 40vw;
          height: 40vh;
          border-radius: 1cm;
          background-color: rgb(126, 62, 185);
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
      }


      .title {
          font-size: 1.3em;
          text-align: center;
      }

      .PurposeButton {
          display: flex;
          width: 20vw;
          flex-wrap: wrap;
          justify-content: space-between;
          align-items: center;
      }


      .PopUp {
          display: none;
          align-items: center;
          justify-content: center;
          width: 100vw;
          height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          background: rgba(0, 0, 0, 0.63);
      }
  </style>
</html>