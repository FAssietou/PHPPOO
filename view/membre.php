<h1 class="text-center">PAGE MEMBRE <small class="text-muted">Bienvenue à Véville</small></h1>


<table class="table table-bordered text-center">

  <thead class="table-primary">
    <tr>
      <th>id_membre</th>
      <th>Pseudo</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>E-Mail</th>
      <th>Civilité</th>
      <th>Statut</th>
      <th>Date d'enregistrement</th>
      <th>Actions</th>
    </tr>
  </thead>
  <?php foreach ($allMembre as $value) : ?>
    <tr>
      <td><?= $value['id_membre']; ?></td>
      <td><?= $value['pseudo']; ?></td>
      <td><?= $value['nom']; ?></td>
      <td><?= $value['prenom']; ?></td>
      <td><?= $value['email']; ?></td>
      <td><?= $value['civilite']; ?></td>
      <td><?= $value['statut']; ?></td>
      <td><?= $value['date_enregistrement']; ?></td>
      <td>
        <a href="?route=delete&id_membre=<?= $value['id_membre']; ?>">
          <svg type="button" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
          </svg></a>
        <svg type="button" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
        </svg>
        <svg type="button" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
      </td>

    </tr>
  <?php endforeach; ?>
</table>


<br />


<!-- ------------------------------------------------------------------------------------------------------------- -->
<form method="POST">

  <div class="container">
    <div class="row g-2">
      <div class="col-6">

        <label>Pseudo</label>

        <div class="input-group w-50" class="p-3 border bg-light">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
            </svg>
          </span>
          <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>
      <br />
      <div class="col-6">
        <label>Mot de passe</label>
        <div class="input-group w-50" class="p-3 border bg-light">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
              <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
            </svg>
          </span>
          <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>
      <br />

      <div class="col-6">

        <label>Nom</label>

        <div class="input-group w-50" class="p-3 border bg-light">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
            </svg>
          </span>
          <input type="text" class="form-control" name="nom" placeholder="Nom" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>
      <br />
      <div class="col-6">
        <label>Prénom</label>

        <div class="input-group w-50" class="p-3 border bg-light">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
            </svg>
          </span>
          <input type="text" class="form-control" name="prenom" placeholder="prenom" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>
      <br />
      <div class="col-6">
        <label>Email</label>
        <div class="input-group w-50" class="p-3 border bg-light">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
              <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"></path>
            </svg>
          </span>
          <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Input group example" aria-describedby="basic-addon1">
        </div>
      </div>
      <br />
      <div class="col-6">
        <label>Civilité</label>
        <div class="p-3 border bg-light">
          <select name="civilite">
            <option value='m'>Homme</option>
            <option value='f'>Femme</option>
          </select>
        </div>
      </div>
      <br />

      <div class="col-6">

        <label>Statut</label>
        <div class="p-3 border bg-light">

          <select name="statut">
            <option value='1'>Admin</option>
            <option value='0'>Membre</option>
          </select>
          <br />
        </div>




        <!-- <input type="date" name="date_enregistrement" placeholder="Date" /> -->

        <br />


        <div class="p-3 border bg-light">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit" name="membre">Enregistrer</button>
          </div>

        </div>

      </div>

    </div>
  </div>
  </div>
  </div>


</form>