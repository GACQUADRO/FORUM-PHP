<?php
session_start();
require('actions/questions/showAllQuestionsAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

    <!-- New -->

<body class="layout with-sidenav fixed-sidenav">

<?php include 'includes/navbar.php'; ?>
    <br><br>

    <main>
      <!-- Code here the main content -->
      <button
        data-target="example-sidenav"
        class="btn rounded-1 press sidenav-trigger hide-md-up"
      >
        Open sidenav
      </button>
      <div class="grix xs8 md12" id="grixcontain">
        <div class="col-xs3 col-md4"></div>
        <div class="col-xs3 col-md7"></div>
      </div>
      <div class="grix xs8 md12">
        <div class="col-xs1" id="grixdelete"></div>
        <div class="col-md1" id="grixdelete2"></div>
        <div class="col-xs6 col-md9">
          <div class="grix" id="grix">
            <div class="col-xs4 col-md8" id="grixTop">
              <div class="titre1">Sujet</div>
              <div class="titre2">Autheur</div>
              <div class="titre4">Date</div>
            </div>
            <div class="col-xs4 col-md8" id="grixforum" >
              <div class="grix xs1" id="Container">
                <!-- CONTENUE DU POST -->
                <?php
                while ($question = $getAllQuestions->fetch()) {
                ?>
                <a href="article.php?id=<?= $question['id']; ?>" id="PostsContent">
                  <div class="grix xs12 containe">
                    <div class="col-xs10 PostsContainer">
                      <div class="grix xs12 containes">
                        <p class="col-xs4 for"> 
                        <?= $question['titre']; ?> 
                        </p>
                        <p class="col-xs3 for2"><?= $question['pseudo_auteur']; ?></p>
                        <p class="col-xs4 for3"><?= $question['date_publication']; ?></p>
                      </div>
                    </div>
                  </div>
                <?php
                   }
                ?>
                </a>
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
        <img src="#" height="30px" width="30px" /> INFORMATION CORONAVIRUS,
        COVID-19. PROTÉGEONS-NOUS LES UNS LES AUTRES. Se laver régulièrement les
        mains ou utiliser une solution hydroalcoolique, Tousser ou éternuer dans
        son coude ou dans un mouchoir, Se moucher dans un mouchoir à usage
        unique, Portez un masque chirurgical ou en tissu de catégorie 1 quand la
        distance de deux mètres ne peut pas être respectée, Respecter une
        distance d’au moins deux mètres avec les autres, Limiter au maximum ses
        contacts sociaux (6 maximum), Eviter de se toucher le visage, Aérer les
        pièces le plus souvent possible, au minimum quelques minutes toutes les
        heures, Saluer sans serrer la main et arrêter les embrassades, Utiliser
        les outils numériques (TousAntiCovid). Pour plus d'informations
        retrouver nous sur le site internet ou appeler au numero suivants:
        https://www.gouvernement.fr/info-coronavirus / 0 800 130 000 (appel
        gratuit)
      </marquee>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/axentix@1.3.0/dist/js/axentix.min.js"></script>
    <style>
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
  <style>
    /* * {
margin: 0;
padding: 0;
} */
/* css */
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
  margin-left: 0%;
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
    margin-bottom: -2% !important;
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
  margin-left: 1vw !important;
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
}
.containe {
  width: 100%;
  text-align: center !important;
  border-bottom: 1px #0B4F6C solid;
}
.PostsContainer {
  height:0% !important
}
.for {
  text-align: left;
  margin-left:40%;
}
.for2 {
  text-align: center;
  margin-left:60%;
}
.for3 {
  text-align: right;
  margin-left:85%;
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
  </style>

</html>