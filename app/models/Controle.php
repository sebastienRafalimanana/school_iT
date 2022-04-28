<?php
require "app/Database.php";
class Controle extends Database{
    private $num_etudiant;
    private $num_matiere;
    private $num_controle;
    private $date_controle;
    private $note;
    
    /**
     * @param array $etudiant
     ** $etudiant[index]['matricule'], $etudiant[index]['note']
     * @param array $controle
     * $controle['matiere'], $controle['num_controle'],$controle['date_controle']
     */
    public function addNote($etudiant,$controle){
        $sql = "INSERT INTO `controle` (`Num_Etudiant`, `Num_Matiere`, `Num_Controle`, `Date_Controle`, `Note`) VALUES ('4676', '1', '2', '2022-04-12', '15') "
        $this->execute($sql);
    }
 
}

?>