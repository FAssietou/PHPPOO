<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Veville</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1/PROJET_PHP_POO/">Accueil</a>
        </li>
        <?php if(!isset($_SESSION['membre'])):?>
        <li class="nav-item">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#sign_up">
  Sign-up
</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#sign">
  Sign
</a>

        </li>
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mon compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactez-nous</a>
        </li>
        <?php if(isset($_SESSION['membre'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="?route=logout">Déconnexion</a>
        </li>
          <?php endif; ?>

          <?php if(isset($_SESSION['membre']) && $_SESSION['membre']['statut'] == 1 ): ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dashbord
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?route=agence">Agence</a></li>
            <li><a class="dropdown-item" href="?route=vehicule">Véhicule</a></li>
            <li><a class="dropdown-item" href="?route=membre">Membre</a></li>
            <li><a class="dropdown-item" href="?route=commande">Commande</a></li>


          </ul>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
    </header>

<?php 
if(isset($_SESSION['membre']['prenom']))
{
echo $_SESSION['membre']['prenom'];
} 

?>

    <?php require_once './view/sign-up.php';?>  <!-- FORM MODAL SIGN-UP -->

    <?php require_once './view/sign.php';?>   <!-- FORM MODAL SIGN -->


    <?= $content; ?>     <!-- $content contient toutes les pages PHP qui sont dans le dossier view à travers cotroller et render dans le $templates -->




   <foot>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  
  </foot>
</body>
</html>