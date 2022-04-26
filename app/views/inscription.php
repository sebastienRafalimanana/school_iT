<link rel="stylesheet" href="../public/assets/css/inscription.css">


<!-- formulaire d'inscription-->
<form action="/action_page.php" class="inscription">
    <!-- information de l'etudiant-->
  <div class="form-group" id="add_etudiant">
      <div class="inscription_header"><p>Information de l'etudiant</p></div>
    <div class="form-group">
        <label for="matricule">Numéro matriculle</label>
        <input type="text" class="form-control" placeholder="Numéro matricule" id="matricule">
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" placeholder="Nom" id="nom">
    </div>
    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" placeholder="Prenom" id="prenom">
    </div>
    <div class="form-group">
        <label for="date_naissance">Date de naissance</label>
        <input type="date" class="form-control" id="date_naissance">
    </div>
  </div>
  <!--Information sur l'inscription-->
  <div class="form-group" id="add_inscription">
  <div class="inscription_header"><p>Information sur l'inscription</p></div>
    <div class="form-group">
        <label for="anne_unniv">Année universitaire</label>
        <select id="anne_unniv" name="anne_unniv"  class="form-control">
            <option value="2022">2022</option>
            <option value="2021 ">2021</option>
            <option value="2020">2020</option>
        </select>    
    </div>
    <div class="form-group">
        <label for="mention">Mention</label>
        <select id="mention" name="mention"  class="form-control">
            <option value="DA2I">DA2I</option>
            <option value="DA2I HYBRID">DA2I HYBRID</option>
            <option value="RPM">RPM</option>
            <option value="RPM HYBRID">RPM HYBRID</option>
            <option value="AES">AES</option>
            <option value="AES HYBRID">AES HYBRID</option>
        </select>
    </div>
    <div class="form-group">
        <label for="niveau">Niveau</label>
        <select id="niveau" name="niveau"  class="form-control">
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
            <option value="M1">M1</option>
            <option value="M2">M2</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
  </div>
  
  
</form> 