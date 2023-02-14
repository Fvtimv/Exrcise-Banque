<?php

class Compte{
    private string $_libelle;
    private int $_solde;
    private string $_devise;
    private Titulaire $_titulaire;


    public function __construct($libelle, $solde, $devise, $titulaire){
        $this -> _libelle = $libelle;
        $this -> _solde = $solde;
        $this -> _devise = $devise;
        $this -> _titulaire = $titulaire;
        $titulaire -> ajouterCompte($this);
    }

    public function getLibelle(){
        return $this -> _libelle;
    }
    public function setLibelle($libelle){
        $this -> _libelle = $libelle;
    }
    public function getSolde(){
        return $this -> _solde;
    }
    public function setSolde($solde){
        $this -> _solde = $solde;
    }
    public function getDevise(){
        return $this -> _devise;
    }
    public function setDevise($devise){
        $this -> _devise = $devise;
    }
    public function getTitulaire(){
        return $this -> _titulaire;
    }
    public function setTitulaire($titulaire){
        $this -> _titulaire = $titulaire;
    }

// deposer argent sur un compte: X euros
    public function crediterCompte($somme){
        $this -> _solde += $somme;  //or we can use $somme + $this -> _solde = $somme
        return $this -> afficherSolde();
    }



// retirer argent sur un compte: X euros
    public function debiterCompte($somme){
        $this -> _solde -= $somme; //or we can use $somme - $this -> _solde = $somme
        return $this -> afficherSolde();
    }

//effectuer un virement d'un compte à l'autre
    public function virement($somme, $cible){
        $this -> _solde -= $somme;  //or we can use $somme - $this -> _solde = $somme
        $cible -> _solde +=$somme;  //or we can use $somme + $cible -> _solde = $somme
        return $this -> afficherSolde();
    }

// Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte.
    public function informationCompte(){
        echo "<br>" .$this -> _libelle ." " .":" ." " .$this -> _solde ." " .$this -> _devise ." "  
        ."appartient a " .$this -> _titulaire -> getNom() ." " .$this -> _titulaire -> getPrenom() ."<br>"; // how to put the titulaire name and surname ?
    }

// afficher la valuer 
    public function afficherSolde(){
            echo "Solde du compte" ." " .$this -> _libelle ." " .":" ." " .$this -> _solde ." " 
            .$this -> _devise ."<br>";
        }
  

    public function __toString(){
        return "{$this -> _libelle} : {$this -> _solde}
         {$this -> _devise}  <br>";
    }

}

?>