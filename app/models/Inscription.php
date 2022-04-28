<?php

class Inscription extends Database{
    private $num_matricule;
    private $id_anne_anversitaire;
    private $id_niveau;
    private $code_mention;
    
    function __construct($num_matricule=null,$id_anne_anversitaire=null,$id_niveau = null,$code_mention=null) {
        $this->num_matricule = $num_matricule;
        $this->id_anne_anversitaire = $id_anne_anversitaire;
        $this->id_niveau = $id_niveau;
        $this->code_mention = $code_mention;
    }
    public function onInscription(){
        $sql = "INSERT INTO `inscription` (`Num_Etudiant`, `Id_Anne_Unversitaire`, `Id_Niveau`, `code_mention`) VALUES ('$this->num_matricule', ' $this->id_anne_anversitaire', ' $this->id_niveau', '$this->code_mention')";
        $this->execute($sql);
    }
    public function onRenscription(){
        $sql = "UPDATE `inscription` SET `Id_Anne_Unversitaire` = ' $this->id_anne_anversitaire', `Id_Niveau` = '$this->id_niveau', `code_mention` = '$this->code_mention' WHERE `inscription`.`Num_Etudiant` =  $this->num_matricule ";
        $this->execute($sql);
    }
    public function onGetEtudiantInformation($num_matricule){
        $sql = "SELECT etudiant.Nom_Etudiant, etudiant.Prenom_Etudiant , inscription.code_mention, inscription.Id_Niveau FROM inscription INNER JOIN etudiant on etudiant.Num_Etudiant = inscription.Num_Etudiant WHERE etudiant.Num_Etudiant = $num_matricule";
        $data = $this->execute_query($sql);
        return $data;
    }

}

?>