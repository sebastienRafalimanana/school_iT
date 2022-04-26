<link rel="stylesheet" href="../public/assets/css/inscription.css">

<!-- formulaire d'inscription-->
<form action="/action_page.php" class="reinscription">
  <!--Information sur la reinscription-->
  <div class="form-group" id="add_reinscription">
  <div class="reinscription_header"><p>Information sur la reinscription</p></div>
    <div class="form-group">
        <label for="anne_unniv">Année universitaire</label>
        <select id="anne_unniv" name="anne_unniv"  class="form-control">
            <option value="2022">2022</option>
            <option value="2021 ">2021</option>
            <option value="2020">2020</option>
        </select>    
    </div>
    <div class="form-group">
        <label for="matricule">Numéro matriculle</label>
        <input type="text" class="form-control" placeholder="Numéro matricule" id="matricule">
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
        <label for="reference_niveau">Niveau précédente</label>
        <input readonly type="text" class="form-control" placeholder="Niveau précédente" id="reference_niveau" value="L1">
    </div>
    <div class="form-group">
        <label for="niveau">Niveau actuelle</label>
        <select id="niveau" name="niveau"  class="form-control">
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
            <option value="M1">M1</option>
            <option value="M2">M2</option>
        </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
  
  
</form> 