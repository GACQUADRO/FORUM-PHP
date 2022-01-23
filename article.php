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
    <style>
        .PublishContent {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-bottom: 3mm;
        }
        
        #PublishParams {
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 99;
            background-color: rgba(0, 0, 0, 0.671);
            position: fixed;
            width: 100vw;
            height: 100vh;
        }
        
        .sidenavContent {
            height: 50%;
            width: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }
        
        
        .linkVal {
            display: flex;
            align-items: center;
            margin-bottom: 5mm;
            width: 100%;
        }
        
        .linkVal:hover {
            color: aliceblue;
        }
        
        .linkVal i {
            margin-left: 3mm;
            font-size: 1.5em;
            /* margin-bottom: 1mm; */
        }
    </style>

    <main>
        <!-- Code here the main content -->
        <button data-target="example-sidenav" class="btn rounded-1 press sidenav-trigger hide-md-up">
          Open sidenav
      </button>
        <div class="grix xs8 md12" id="grixcontains">
            <div class="col-xs3 col-md4"></div>
            <div class="col-xs2 col-md3"></div>
            <div class="col-xs3 col-md7"></div>
        </div>
        <div class="grix xs8 md12">
            <div class="col-xs1" id="grixdelete"></div>
            <div class="col-md1" id="grixdelete2"></div>
            <div class="col-xs6 col-md9">
                <div class="grix" id="grix">
                    <div class="col-xs4 col-md8" id="grixTop">
                    </div>
                    <div class="col-xs4 col-md8" id="grixforum">
                        <!-- <img src="https://images.hdqwalls.com/wallpapers/music-pipes-abstract-4k-dm.jpg);" height="1000px" width="auto" alt=""> -->
                        <div id="bg" class="col-xs4 col-md8">

                            <?php
                            if (isset($question_publication_date)) {
                            ?>
                            <div class="grix xs1" id="Container">

                                <div class="topcon">
                                    <img src="https://www.w3schools.com/howto/img_avatar2.png" class="img">
                                    <p class="profilName"><?= '<a href="profile.php?id=' . $question_id_author . '">' . $question_pseudo_author . '</a> '; ?></p>
                                    <!-- on click go to profil -->
                                    <div class="titre">
                                        <h1><?= $question_title; ?></h1>
                                    </div>

                                </div>

                                <div class="post">
                                    <div class="INpost">
                                        <p>
                                        <?= $question_content; ?>
                                        </p>

                                        <div class="dates">
                                            <p><?=$question_publication_date;?></p>
                                        </div>

                                        <?php
                                        }
                                        ?>
                                        <div class="social">
                                            

                                            <!-- dislike -->
                                            

                                            <!-- comment -->
                                            

                                            <div class="4" id="social">
                                                <div id="fb-root"></div>

                                                <!-- Your share button code -->
                                                <div class="fb-share-button" data-href="https://www.twitch.tv/lunium" data-layout="button_count">
                                                </div>
                                            </div>
                                            <!-- Load Facebook SDK for JavaScript -->

                                        </div>
                                    </div>
                                </div>

                                <!-- response -->
                                <form class="form-group" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Réponse :</label>
                                        <textarea name="answer" class="form-control"></textarea>
                                        <br>
                                        <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                                    </div>
                                </form>
                                <?php
                                while ($answer = $getAllAnswersOfThisQuestion->fetch()) {
                                ?>
                                  <div class="CommentSpace">

                                    <div class="containerComment">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="media g-mb-30 media-comment">
                                                    <div class="media-body u-shadow-v18  g-pa-30">
                                                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" style="position:relative;top:70px;left:20px;" alt="Image Description">
                                                        <div class="wow">
                                                            <div class="g-mb-15">
                                                                <a class="h5 g-color-gray-dark-v1 mb-0" href="profile.php?id=<?= $answer['id_auteur']; ?>">
                                                                    <?= $answer['pseudo_auteur']; ?>
                                                                </a>
                                                            </div>

                                                            <p><?= $answer['contenu']; ?></p>

                                                            <ul class="list-inline d-sm-flex my-0">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }   
                                    ?>
                                </div>

                                <!-- <div class="lineContainer">
                                <div class="line"></div>
                            </div> -->





                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs1" id="grixdelete"></div>
            <div class="col-xs2" id="grixdelete"></div>
        </div>
    </main>

    <footer class="footer primary">
        <marquee>
            Copyright © 2021 - Example
            <img src="#" height="30px" width="30px"> INFORMATION CORONAVIRUS, COVID-19. PROTÉGEONS-NOUS LES UNS LES AUTRES. Se laver régulièrement les mains ou utiliser une solution hydroalcoolique, Tousser ou éternuer dans son coude ou dans un mouchoir,
            Se moucher dans un mouchoir à usage unique, Portez un masque chirurgical ou en tissu de catégorie 1 quand la distance de deux mètres ne peut pas être respectée, Respecter une distance d’au moins deux mètres avec les autres, Limiter au maximum
            ses contacts sociaux (6 maximum), Eviter de se toucher le visage, Aérer les pièces le plus souvent possible, au minimum quelques minutes toutes les heures, Saluer sans serrer la main et arrêter les embrassades, Utiliser les outils numériques
            (TousAntiCovid). Pour plus d'informations retrouver nous sur le site internet ou appeler au numero suivants: https://www.gouvernement.fr/info-coronavirus / 0 800 130 000 (appel gratuit)
        </marquee>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/axentix@1.3.0/dist/js/axentix.min.js">

    </script>
    <style>
        /* * {
margin: 0;
padding: 0;
} */
/* CSS */

@import url("https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap");

html {
  overflow-x: hidden;
}

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

p,
h1,
a,
textarea {
  font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica",
    "Arial", sans-serif;
}

body::-webkit-scrollbar {
  width: 0.25rem;
}

body::-webkit-scrollbar-track {
  background: #2b4157;
}

body::-webkit-scrollbar-thumb {
  background: linear-gradient(transparent, rgb(121, 75, 196), #5729e5);
}

div::-webkit-scrollbar {
  width: 0.25rem;
}

div::-webkit-scrollbar-track {
  background: #2b4157;
}

div::-webkit-scrollbar-thumb {
  background: linear-gradient(transparent, rgb(121, 75, 196), #5729e5);
}
.form-group {
  margin-left:40%;
}
/* axentix layout config */
.navbar {
  background-color: transparent !important;
  /* border-bottom: 2px solid white !important; */
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
.filter {
  position: absolute;
  width: 100%;
  background-color: rgb(121, 75, 196) !important;
}
.grixfilter {
  position: relative;
}
  .sidenav {
    background-color: #040F16 !important;
    border-right: 2px solid #0B4F6C !important;
    color: #8497b0 !important;
  }
.sidenav-trigger {
  background-color: rgb(121, 75, 196) !important;
  color: #8497b0 !important;
}
.nbrco {
  color: rgb(121, 75, 196) !important;
  margin-left: 5px;
  font-size: 1.2em;
}
#publish {
  /* border-top-left-radius:  12px;
    border-top-right-radius:  12px;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px; */
  transition: 0.5s all;
  border-radius: 20px;
  padding: 3mm;
  border-color: #040F16;
  background-color: #2b4157;
  color: wheat;
  font-weight: bold;
  margin-top: 2mm;
}

/* #publish:hover {
  transition: 0.5s;
  transform: scale(1.1);
  background-color: rgb(121, 75, 196);
  border: #5729e5;
} */
.TrackedStuff {
  color: rgb(121, 75, 196);
  font-size: 0.85em;
}
.footer {
  background-color: transparent !important;
  z-index: 99 !important;
}
/* ////axentix layout config */
#grixcontain {
  margin-bottom: 0.3% !important;
}
#grix {
  background-color: #0B4F6C;
  margin-right: 1vw !important;
  margin-left: 10vw !important;
  height: 100%;
  text-align: center;
  color: #8497b0;
  border-radius: 12px;
}
#grixactu {
  background-color: #040F16;
  margin-right: 1vw !important;
  margin-left: 1vw !important;
  margin-bottom: 10%;
  height: 430px;
  text-align: center;
  color: #8497b0;
  border: #0B4F6C 1px solid !important; 
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  border-radius: 15px;
}
#grixfilter {
  background-color: transparent;
  margin-right: 1vw !important;
  margin-left: 1vw !important;
  height: 100%;
  text-align: center;
  color: #8497b0;
}
#grixdelete {
  margin-right: 1vw !important;
  margin-left: 1vw !important;
  height: 100%;
  text-align: center;
}
#PostsContent {
  padding-bottom: 20px;
  padding-top: 20px;
  font-size: 1.45em;
  display: flex;
  margin: auto;
  width: 100%;
  border-bottom: #0B4F6C 1px solid;
}
.containe {
  width: 100%;
  text-align: center !important;
}
.PostsContainer {
  display: flex;
}
.for {
  text-align: left;
}
.for2 {
  text-align: center;
}
.for3 {
  text-align: right;
}
.for4 {
  text-align: center;
}
#grixTop {
  font-size: 1.55em;
  background-color: #0B4F6C !important;
  height: 100%;
  text-align: center !important;
  margin-right: 10%;
  color: #8497b0;
  border-radius: 12px !important;
  display: flex;
}
.titre1 {
  margin: auto;
}
.titre2 {
  margin: auto;
}
.titre4 {
  margin: auto;
}
#grixforum {

  background-color: #040F16;
  height: 70vh;
  border-bottom: 2px solid #0B4F6C !important;
  border-left: 2px solid #0B4F6C !important;
  border-right: 2px solid #0B4F6C !important;
  text-align: center;
  color: #8497b0;
  overflow: scroll;
  overflow-x: hidden;
}
#filter {
  font-size: 1.25em;
  width: 100%;
  background-color: #040F16 !important;
  color: #8497b0;
  outline: none;
}
#filter:hover {
  background-color: rgb(121, 75, 196) !important;
}
@media screen and (max-width: 957px) {
  #grixdelete {
    display: block !important;
  }
  #grixdelete2 {
    display: none !important;
  }
}
@media screen and (max-width: 1920px) {
  #grixdelete {
    display: none;
  }
  #grixdelete2 {
    display: block;
  }
  html {
    overflow-y: hidden;
  }
  .sidenav {
    width: 250px !important;
  }
}
/* body */

.topnav {
  overflow: hidden;
}

/* .topnav a {
  float: left;
  display: block;
  color: #8497B0;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
} */

/* .topnav a.active {
  background-color: #2196F3;
  color: white;
} */

.topnav .search-container {
  float: right;
}

.topnav input[type="text"] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

#search {
  border: 2px #0B4F6C solid !important;
  border-top-left-radius: 12px;
  border-bottom-left-radius: 12px;
  background-color: #040F16 !important;
  color: #8497b0 !important;
  outline: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  border-right: 2px #0B4F6C solid !important;
  border-top: 2px #0B4F6C solid !important;
  border-bottom: 2px #0B4F6C solid !important;
  background: #0B4F6C !important;
  color: #8497b0 !important;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border-top-right-radius: 12px;
  border-bottom-right-radius: 12px;
}

@media screen and (max-width: 957px) {
  .topnav .search-container {
    float: none;
  }
  html {
    overflow-y: visible;
  }
  .chat {
    display: none;
  }
  #grixactu {
    margin-top: 10%;
  }
  #search {
    border-bottom-left-radius: 0%;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
  }
  .topnav .search-container button {
    border-radius: 0%;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
  }
  .topnav .search-container button:hover {
    background-color: rgb(121, 75, 196) !important;
  }
  .topnav a,
  .topnav input[type="text"],
  .topnav .search-container button {
    float: none;
    display: block;
    text-align: center;
    width: 100%;
    margin: 0;
    padding: 1px;
  }
  .topnav input[type="text"] {
    border: 1px solid #2b4157 !important;
  }
}
.actu {
  border: #0B4F6C 1px solid;
  border-radius: 12px;
  width: 80%;
  margin-top: -15%;
}
.actu1 {
  border-top: #0B4F6C 1px solid;
}
.actu2 {
  border-top: #0B4F6C 1px solid;
}
.ami {
  border: #0B4F6C 1px solid;
  border-radius: 12px;
  width: 80%;
  margin-bottom: 10%;
}
.ami1 {
  border-bottom: #0B4F6C 1px solid;
}
#example- {
  border-top-right-radius: 15px;
  border-top-left-radius: 15px;
  border: #0B4F6C 1px solid;
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: #040F16 !important;
}
p {
  text-align: left;
}
.textbox {
  border: #0B4F6C 1px solid;
}

.ImageNameContainer {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  margin-left: 3mm;
}
.profilContainer {
  /* background-color: aliceblue; */
  width: 100%;
  display: flex;
  /* justify-content: center; */
  align-items: center;
  /* flex-direction: column; */
  margin-top: 200px;
}

.ImageNameContainer p {
  margin-left: 3mm;
  margin-top: 2mm;
  font-weight: bold;
  color: white;
}
.PublishContent {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  margin-bottom: 3mm;
}
#PublishParams {
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  background-color: rgba(0, 0, 0, 0.671);
  position: fixed;
  width: 100vw;
  height: 100vh;
}

.LeaveIcon {
  position: absolute;
  top: 10px;
  left: 10px;
}


.sidenavContent {
  height: 50%;
  width: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: column;
}

.LinkContent {
  display: flex;
  align-items: baseline;
  flex-direction: column;
}

.LinkContent a {
  font-weight: bold;
  font-size: 1.5em;
  /* margin-bottom: 1mm; */
}

.linkVal {
  display: flex;
  align-items: center;
  margin-bottom: 5mm;
  width: 100%;
}

.linkVal:hover {
  color: aliceblue;
}

.linkVal i {
  margin-left: 3mm;
  font-size: 1.5em;
  /* margin-bottom: 1mm; */
}


.NameProfilContainer {  
    position: relative;
    margin-bottom: 5mm;
    margin-left: 2mm;
}


.NameProfilContainer p {
    color: white;
    font-weight: bold;
    font-size: 1.2em;
    display: flex;
    align-items: center;
    flex-direction: row;
}


.dots:hover {
  cursor: pointer;
}


.dot, .dot:before, .dot:after {
  /* transform:translate(1px, 0px); */
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 20px;
  background-color: #ff0000;
}

.dot {
  margin-top: -21px;
  margin-left: 180px;
}

.dot:before, .dot:after {
  content: "";
}

.dot:before {
  right: 10px;
  transition: right .3s ease-out;
}

.dot:after {
  left: 10px;
  transition: left .3s ease-out;
}

.dots:hover .dot:before {
  right: -10px;
}

.dots:hover .dot:after {
  left: -10px;
}

.PublishForm textarea {
  /* transform: scale(1.6);  */
  background-color: black;
  border: white solid 1mm;
  border-radius: 10px;
  font-weight: bold;
  height: 30vh;
  color: red;
}


.PublishForm {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
}
@import url("https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap");
.topcon {
    margin-left: 10px;
    margin-top: 10px;
    display: flex;
}

.img {
    height: 70px;
    width: 70px;
    border-radius: 50%;
}

.titre {
    color: #ffffffe0;
    font-size: 3.3rem !important;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
}

.profilName {
    margin-left: 0%;
    margin-top: 4%;
    font-size: smaller;
    color: #ffffff61;
}

.post {
    margin-left:10%;
    max-width: 100%;
    align-items: center;
    display: flex;
    justify-content: center;
}

.INpost {
    margin-top: 2%;
    font-size: larger;
    color: #ffffffe0;
    width: 85%;
    text-align: justify;
    background: #0000004f;
    padding: 8mm;
    border-radius: 69px
}

.wow {
    /* margin-top: 2%; */
    font-size: larger;
    color: #ffffffe0;
    /* width: 85%; */
    /* text-align: justify; */
    background: #0000004f;
    padding: 8mm;
    border-radius: 69px;
}

p {
    line-height: 2.1rem !important;
    text-align: inherit !important;
}

.dates {
    color: #ffffff61;
    margin-top: 2%;
    font-size: smaller;
}

.line {
    width: 97%;
    border-top: solid 0.1mm grey;
    margin: auto;
}
.dislike {
    background: transparent;
    border: none;
    color: rgb(255, 255, 255);
}
.like {
    background: transparent;
    border: none;
    color: rgb(255, 255, 255);
}
.buttonSocial {
    background: transparent;
    border: none;
    color: rgb(255, 255, 255);
    margin-left: -10%;
}

.buttonSocial2 {
    background: transparent;
    border: none;
    color: rgb(255, 255, 255);
    margin-left: -14%;
}

.social {
    justify-content: flex-end;
    display: flex;
    align-items: center;
}

#social {
    margin-left: 1%;
}

#grixactu {
    margin-top: 38%;
}

#grixforum {
    background: url(https://images.hdqwalls.com/wallpapers/music-pipes-abstract-4k-dm.jpg);
    background-size: cover;
}

.media-body img {
    width: 100000px;
}

#test,
#test2 {
    outline: none;
}


/* 
    ; */


/* #bg {
    width: 100%;
    height: auto;
    background: rgba(0, 0, 0, 0.459);
} */


/* 
#grixforum {
    width: 200px;
    height: 200px;
    display: block;
    position: relative;
  }
  
  #grixforum::after {
    content: "";
    background: url(image.jpg);
    opacity: 0.5;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: absolute;
    z-index: -1;   
  } */

.BackgroundImage {
    width: 100%;
    height: 100%;
    z-index: 1515554;
}
@media (min-width: 0) {
    .g-mr-15 {
        margin-right: 1.07143rem !important;
    }
}

@media (min-width: 0) {
    .g-mt-3 {
        margin-top: 0.21429rem !important;
    }
}

.g-height-50 {
    height: 50px;
}

.g-width-50 {
    width: 50px !important;
}

@media (min-width: 0) {
    .g-pa-30 {
        padding: 2.14286rem !important;
    }
}

.g-bg-secondary {
    background-color: #000000 !important;
}

.u-shadow-v18 {
    box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
}

.g-color-gray-dark-v4 {
    color: rgb(255, 255, 255) !important;
}

.g-font-size-12 {
    font-size: 0.85714rem !important;
}

.media-comment {
    margin-top: 20px
}

.row {
    display: flex;
    align-items: center;
    justify-content: center;
}
    </style>

</body>

</html>