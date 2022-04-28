<?php
require "app/Database.php";
class Etudiant extends Database {
    private $num_matricule;
    private $nom_etudiant;
    private $prenom_etudiant;
    private $date_naissance_etudiant;
    
    function __construct($num_matricule=null,$nom_etudiant=null,$prenom_etudiant=null,$date_naissance_etudiant=null) {
        $this->num_matricule = $num_matricule;
        $this->nom_etudiant = $nom_etudiant;
        $this->prenom_etudiant = $prenom_etudiant;
        $this->date_naissance_etudiant = $date_naissance_etudiant;
      }
    public function add(){
        $sql = "INSERT INTO `etudiant` (`Num_Etudiant`, `Nom_Etudiant`, `Prenom_Etudiant`, `Date_Naiss`) VALUES ('$this->num_matricule', '$this->nom_etudiant', '$this->prenom_etudiant', '$this->date_naissance_etudiant')";
        $this->execute($sql);
    }
    public function update(){
        $sql = "UPDATE `etudiant` SET `Nom_Etudiant` = ' $this->nom_etudiant', `Prenom_Etudiant` = '$this->prenom_etudiant', `Date_Naiss` = '$this->date_naissance_etudiant' WHERE `etudiant`.`Num_Etudiant` =  $this->num_matricule ";
        $this->execute($sql);
    }
    public function getOne($num_matricule){
        $sql = "SELECT * FROM `etudiant` WHERE `etudiant`.`Num_Etudiant`=$num_matricule";
        $data = $this->execute_query($sql);
        return $data;
    }
    public function getAll(){
        $sql = "SELECT * FROM `etudiant`";
        $data = $this->execute_query($sql);
        return $data;
    }
}

?>