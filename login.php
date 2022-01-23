<?php require('actions/users/loginAction.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<br><br>
    <form class="container Connect" method="POST">

    <?php
        if(isset($errorMsg)){echo '<p>'.$errorMsg.'<p>';}?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="passwd" >
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
        <br><br>
        <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris.</p></a>
        <a href="index.php"><p>Retour</p></a>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/axentix@1.3.0/dist/js/axentix.min.js"></script>
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
      .btn{
        background-color: #0B4F6C !important;
      }
      .form-control {
        background-color: #2b4157 !important;
      }
      .Connect {
        margin-top: 10%;
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
  <script>
      setTimeout(() => {
          document.querySelector(".PopUp").style.display = "flex"
      }, 2000);
      
  </script>
  </body>
</html>