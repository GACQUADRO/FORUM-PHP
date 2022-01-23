<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish-question.php">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-questions.php">Mes questions</a>
        </li>

        <?php
        if (isset($_SESSION['auth'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="profile.php?id=<?=$_SESSION['id']; ?>">Mon Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="actions/users/logoutAction.php">Déconnexion</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav> -->
<header>
      <nav class="navbar primary">
        <div class="topnav ml-auto" id="navt">
          <div class="search-container">
            <form method="GET">
              <input
                type="text"
                placeholder="Search.."
                name="search"
                id="search"
              />
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </nav>
</header>
<div
      id="example-sidenav"
      data-ax="sidenav"
      class="sidenav shadow-1 large fixed white"
    >
      <div class="sidenavContent">
        <div class="sidenav-header">
          <button data-target="example-sidenav" class="sidenav-trigger">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <img
          class="sidenav-logo dropshadow-1"
          src="includes/client/assets/image/Logo.png"
          style="height: auto; width: 40%; position:relative;bottom:4mm"
          alt="Logo"
        />
        <div class="LinkContent">
          <div class="linkVal">
            <i class="fas fa-home"></i>
            <li method="POST" class="Connect2" id="Connect">
            <a type="submit" href="login.php"> Se connecter </a>
            </li>
            <a href="index.php" class="sidenav-link active">Accueil</a>
          </div>
          <?php
          if (isset($_SESSION['auth'])) {
          ?>
            <li class="linkVal">
              <i class="fas fa-user"></i
              ><a  href="profile.php?id=<?=$_SESSION['id']; ?>" class="sidenav-link">Profil</a>
            </li>
            <li class="linkVal">
              <i class="fas fa-bell"></i
              ><a href="my-questions.php" class="sidenav-link">Mes Posts</a>
            </li>
            <li class="PublishContent">
              <a id="publish" href="publish-question.php">
                Publier quelque chose
            </a>
          </li>
            <li id="Connect">
              <a href="actions/users/logoutAction.php"> Se deconnecter </a>
            </li> 
            <style>
              .Connect2 {
                display:none !important;
              }
              .LinkContent {
                margin-left:10%;
                display: flex;
                align-items: baseline;
                flex-direction: column;
              }

              .LinkContent a {
                font-weight: bold;
                font-size: 1.3em !important;
                /* margin-bottom: 1mm; */
              }
            </style>
          <?php
          }
          ?>
        </div>
      </div>
      </div>
    </div>