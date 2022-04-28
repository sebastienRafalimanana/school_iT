<link rel="stylesheet" href="../public/assets/css/inscription.style.css">

<form class="inscription" id="inscriptionForm">
        <h3 id="aboutTask">Inscription d'un étudiant</h3>
        <div class="info">
            <div class="info-box">
                <h5 id="taskName">Information sur l'inscription</h5>
                <div class="box" id="info-sco">
                    <!-- annee universitatire -->
                    <label for="anne_unniv">Année universitaire:</label>
                    <select name="anne_unniv" id="anne_unniv">
              <option value="2022">2022</option>
              <option value="2021 ">2021</option>
              <option value="2020">2020</option>
            </select>
                    <!-- mention -->
                    <label for="mention">Mention</label>
                    <select id="mention" name="mention" class="form-control">
              <option value="DA2I">DA2I</option>
              <option value="DA2I HYBRID">DA2I HYBRID</option>
              <option value="RPM">RPM</option>
              <option value="RPM HYBRID">RPM HYBRID</option>
              <option value="AES">AES</option>
              <option value="AES HYBRID">AES HYBRID</option>
            </select>
                    <!-- niveau -->
                    <label for="niveau">Niveau</label>
                    <select id="niveau" name="niveau" class="form-control">
              <option value="1">L1</option>
              <option value="2">L2</option>
              <option value="3">L3</option>
              <option value="4">M1</option>
              <option value="5">M2</option>
            </select>
                </div>
                <div class="box_2" id="info-etu">
                    <label for="matricule">Numéro matriculle:</label>
                    <input type="text" class="form-control" id="matricule" />
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" />
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" id="prenom" />
                    <label for="date_naissance">Date de naissance</label>
                    <input type="date" class="form-control" id="date_naissance" />
                </div>
                <div class="conclusion" id="conclusion">
                    <div class="conclusion_detail">
                        <div><i class="fa fa-check"></i><span id="num_matri">4718</span></div>
                        <div><i class="fa fa-check"></i><span id="fname_etu">RAFALIMANANA</span></div>
                        <div><i class="fa fa-check"></i><span id="lname_etu">Jean Sebastien</span></div>
                        <div><i class="fa fa-check"></i><span id="dnaiss_etu">15/01/2002</span></div>
                    </div>
                    <div  class="conclusion_detail">
                        <div><i class="fa fa-check"></i><span id="a_univ">2022</span></div>
                        <div><i class="fa fa-check"></i><span id="mention_etu">DA2I</span></div>
                        <div><i class="fa fa-check"></i><span id="niveau_etu">Licence L1</span></div>
                    </div>
                </div>
            </div>

            <div class="info-container">
                <div class="progress-container">
                    <div class="progress" id="progress"></div>
                    <div class="circle active">1</div>
                    <div class="circle">2</div>
                    <div class="circle">3</div>
                </div>
                <button class="btn" type="button" desabled id="prev">
            précendent
          </button>
                <button class="btn" type="button" id="next">suivant</button>
            </div>
        </div>
</form>

