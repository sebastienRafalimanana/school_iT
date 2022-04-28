<link rel="stylesheet" href="../public/assets/css/inscription.css">

<form class="reinscription" id="inscriptionForm">
        <h3 id="aboutTask">Reinscription d'un étudiant</h3>
        <div class="info">
            <div class="info-box">
                <h5 id="taskName">Information sur la reinscription</h5>
                <div class="box" id="info-sco">
                    <!-- annee universitatire -->
                    <label for="anne_unniv">Année universitaire:</label>
                    <select name="anne_unniv" id="anne_unniv">
                        <option value="2022">2022</option>
                        <option value="2021 ">2021</option>
                        <option value="2020">2020</option>
                    </select>
                    <!--  identité de l'etudiant -->
                    <label for="matricule">Numéro matriculle:</label>
                    <input type="text" class="form-control" id="matricule" />
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" />
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
                    <div id="level">
                    <div>
                        <label for="last_niveau">Niveau récent</label>
                        <select id="last_niveau" name="last_niveau" >
                            <option value="1">L1</option>
                            <option value="2">L2</option>
                            <option value="3">L3</option>
                            <option value="4">M1</option>
                            <option value="5">M2</option>
                        </select>
                    </div>
                    <div>
                    <label for="now_niveau">Niveau actuel</label>
                        <select id="now_niveau" name="now_niveau" >
                            <option value="1">L1</option>
                            <option value="2">L2</option>
                            <option value="3">L3</option>
                            <option value="4">M1</option>
                            <option value="5">M2</option>
                        </select>
                    </div>
                    </div>
                   
                </div>
                
            </div>

            <div class="info-container">
                <div class="progress-container">
    
                </div>
                <button class="btn" type="button" id="sumbit_data">suivant</button>
            </div>
        </div>
</form>
<script src="../public/assets/js/reinscription.min.js"></script>

