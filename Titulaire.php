<?php

class Titulaire{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $_comptes;

    public function __construct($nom, $prenom, string $dateNaissance, $ville){
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _dateNaissance = new DateTime ($dateNaissance);
        $this -> _ville = $ville;
        $this -> _comptes = array();
    }

    public function getNom(){
        return $this -> _nom;
    }
    public function setNom($nom){
        $this -> _nom = $nom;
    }
    public function getPrenom(){
        return $this -> _prenom;
    }
    public function setPrenom($prenom){
        $this -> _prenom = $prenom;
    }
    public function getDateNaissance(){
        return $this -> _dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
        $this -> _dateNaissance = $dateNaissance;
    }
    public function getVille(){
        return $this -> _ville;
    }
    public function setVille($ville){
        $this -> _ville = $ville;
    }
    public function getComptes(){
        return $this -> _comptes;
    }
    public function setComptes($comptes){
        $this -> _comptes = $comptes;
    }


    public function ajouterCompte($compte){
        $this -> _comptes[] = $compte;
    }

    public function calculerAge(){
        $dateNaissance = $this -> _dateNaissance;
        $dateCourante = new DateTime();
        $diff = $dateNaissance -> diff($dateCourante);
        return $diff -> y;
    }

    public function displayAge(){
        echo $this -> _nom ." " .$this -> _prenom ." " ."a" ." " .$this -> calculerAge() ." " ."ans <br>";
    }



//Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci.
  
    public function informationTitulaire(){
        echo "<br>" .$this -> _nom ." " .$this -> _prenom ." " ."âgée de :" ." " .$this -> calculerAge() ." vivant a "
        ." " .$this -> _ville ." possède : <br>";
        foreach ($this -> _comptes as $compte){
            echo $compte;
    }
    }

    


    public function __toString()
    {
        return "{$this -> _nom} {$this -> _prenom} 
        {$this -> _dateNaissance} {$this -> _ville} <br>";
    }
}






    // public function afficherComptes(){
    //     echo "<br>" ." Les Comptes Bancaires de" ." " .$this -> _nom ." " .$this -> _prenom ."<br>";
    //     foreach ($this -> _comptes as $compte){
    //         echo $compte;
    // }
    // }
    


?>