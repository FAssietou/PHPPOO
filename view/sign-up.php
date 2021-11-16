
<!-- MODAL SIGN UP -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="sign_up" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
            <input type="text" name="pseudo" placeholder="pseudo">
            <br/>
            <input type="password" name="mdp" placeholder="password">
            <br/>
            <input type="text" name="nom" placeholder="Nom">
            <br/>
            <input type="text" name="prenom" placeholder="Prenom">
            <br/>
            <input type="email" name="email" placeholder="Email">
            <br/>
            <select name="civilite">
                <option value='m'>Homme</option>
                <option value="f">Femme</option>
            </select>
            <br/>
            <input type="hidden" name="sign_up">
            <button>Enregistrer</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer la fenêtre</button>
        <button type="button" class="btn btn-primary">enregistrer les changements</button>
      </div>
    </div>
  </div>
</div>
<!-- FIN SIGN UP -->
