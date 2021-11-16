<h1 class="text-center">PAGE ACCUEIL <small class="text-muted">Bienvenue à Véville</small></h1>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/audi1.jpg" class="d-block w-100" style="height: 500px;" alt="Audi">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bienvenue à bord<br />Location de voiture 24h/24 et 7j/7</h5>
        <p>
        <div class="btn-group">
          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Agences
          </button>
          <ul class="dropdown-menu">
            <li>Agence de Paris</li>
            <li>Agence de Marseille</li>
            <li>Agence de Lyon</li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="date" class="btn btn-secondary btn-sm" type="button">
            Date de Location
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span type="datetime" class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li type="datetime"></li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="date" class="btn btn-secondary btn-sm" type="button">
            Date de fin de Location
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span type="datetime" class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li type="datetime"></li>
          </ul>
        </div>
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/mercedes1.jpg" class="d-block w-100" style="height: 500px;" alt="Mercedes">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bienvenue à bord<br />Location de voiture 24h/24 et 7j/7</h5>
        <p>
        <div class="btn-group">
          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Agences
          </button>
          <ul class="dropdown-menu">
            <li>Agence de Paris</li>
            <li>Agence de Marseille</li>
            <li>Agence de Lyon</li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="date" class="btn btn-secondary btn-sm" type="button">
            Date de Location
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span type="datetime" class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li type="datetime"></li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="date" class="btn btn-secondary btn-sm" type="button">
            Date de fin de Location
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span type="datetime" class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li type="datetime"></li>
          </ul>
        </div>
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/merco1.jpg" class="d-block w-100" style="height: 500px;" alt="Mazda">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bienvenue à bord<br />Location de voiture 24h/24 et 7j/7</h5>
        <p>
        <div class="btn-group">
          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Agences
          </button>
          <ul class="dropdown-menu">
            <li>Agence de Paris</li>
            <li>Agence de Marseille</li>
            <li>Agence de Lyon</li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="date" class="btn btn-secondary btn-sm" type="button">
            Date de Location
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span type="datetime" class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li type="datetime"></li>
          </ul>
        </div>
        <div class="btn-group">
          <button type="date" class="btn btn-secondary btn-sm" type="button">
            Date de fin de Location
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span type="datetime" class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li type="datetime"></li>
          </ul>
        </div>
        </p>
        .</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php foreach ($agenceWithVehicule as $value) : ?>

  <ul style="padding-top: 40px;">
    <div class="row" >
      <div class="col">
        <li class="list-group" style="padding-left: 400px"><img src=" <?= $value['photo']; ?>" alt="" width="200" height="200"></li>
      </div>
      <div class="col" style="padding-top: 20px;">
        <li class="list-group">AGENCE : <?= $value['titre']; ?></li>
        <li class="list-group">MARQUE : <?= $value['marque']; ?></li>
        <li class="list-group">Modèle : <?= $value['modele']; ?></li>
        <li class="list-group">Description : <?= $value['description']; ?></li>
        <li class="list-group">Prix journalier : <?= $value['prix_journalier']; ?></li>
      </div>
    </div>
    <br />
  </ul>
<div style="margin-bottom: 50px;" class="nav justify-content-center">
  <a href="?route=reservation&id_vehicule=<?= $value['id_vehicule']; ?>" class="btn btn-outline-primary">
    Réservez-ici
  </a>
</div>
<?php endforeach; ?>