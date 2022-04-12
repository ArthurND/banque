<?php
//creation de la classe compte 
class Compte{
    //les differentes proprietes
    private $libelle;
    private $soldeInitial;
    private $devise;
    private $titulaire;
    //le construct
    public function __construct(Titulaire $titulaire, $libelle,$soldeInitial,$devise){
          $this -> libelle = $libelle;
          $this -> soldeInitial = $soldeInitial;
          $this -> devise = $devise;
          $this -> titulaire = $titulaire;
          $this -> titulaire ->ajouterCompte($this); 
    }
    //setter et getter de libelle
    public function setLibelle($libelle){
        $this -> libelle = $libelle;
    }
    public function getLibell(){
        return $this -> libelle;
    }
    //setter et getter de soldeinitial 
    public function setSoldeInitial($soldeInitial){
        $this -> soldeInitial = $soldeInitial;
    }
    public function getSoldeInitial(){
        return $this -> soldeInitial;
    }
    //setter et getter de devise 
    public function setDevise($devise){
        $this -> devise = $devise;
    }
    public function getDevise(){
        return $this -> devise;
    }
    //setter et getter de titulaire
    public function setTitulaire($titulaire){
        $this -> titulaire = $titulaire;
    }
    public function getTitulaire(){
        return $this -> titulaire;
    }
    //les methodes 
    //la methode qui va ajouter un montant au precedent solde 
    public function crediterCompte($montant){
        echo 'Votre compte a ete crediter de '. $montant . ' euros.<br>';
        echo 'Votre nouveau solde est de '. $this -> soldeInitial += $montant .' euros.<br>';
        echo '<br>';
    }
    //la methode qui va enlever un montant au precedent solde 
    public function debiterCompte($montant){
        echo $this-> titulaire.'<br>';
        if ($this->soldeInitial < $montant){
            echo 'VOTRE COMPTE PASSE EN NEGATIF: '.$this -> soldeInitial -= $montant.' euros';
        }else{
            echo 'Votre compte a ete debiter de '. $montant . ' euros.<br>';
            echo 'Votre nouveau solde est de '. $this -> soldeInitial -= $montant .' euros.<br>';
        }
        echo"<br>";
    }
    public function effectuerVirement($compteCible, $montant){
    /* effectuer un virement cest: 
            1-debiter le compte A
            2-crediter le compte B
            3 il faut que les compte existes*/
            $this -> debiterCompte($montant)."<br>";
            $compteCible -> crediterCompte($montant);
            echo '<br>';
    } 
    //on va stringer la classe 
    public function __toString()
    {
        return 'Compte: '. $this-> libelle .' / Solde actuel: '.$this->soldeInitial.' '.$this -> devise.' . '; 
    }

}
?>