

<link rel="stylesheet" href="../public/assets/lib/bootstrap.min.css">
<link rel="stylesheet" href="../public/assets/css/ajout_note.style.css">
<!--  ajout note  -->
    <form action=""  class="ajout_note">
          <!--  fiche de note -->
        <div class="form-group py-2 order-2" id="ajout_note_fiche">
            <?php for ($i=0; $i <50 ; $i++) { ?>
            <!--  ligne de la fiche -->
             <div class="form-inline cell my-2" >
                <input readonly type="text" class="form-control" value="4718" name="matricule">
                <input disabled type="text" class="form-control" value="Rafalimanana jean sebastien">
                <input type="number" class="form-control" value="0" name="note_4718"   min="0" max="120">
            </div>
            <!-- fin  ligne de la fiche -->
            <?php } ?> 
        </div>
        <div class="form-group order-1" id="ajout_note_control" >
            <div class="form-group params" >
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
                    <label for="niveau">Niveau actuelle</label>
                    <select id="niveau" name="niveau"  class="form-control">
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                        <option value="M1">M1</option>
                        <option value="M2">M2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="niveau">matiere</label>
                    <select id="niveau" name="niveau"  class="form-control">
                        <option value="PHP">PHP</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </form>