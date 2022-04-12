<?php
//creation de la classe titulaire
class Titulaire{
    //les differentes proprietes
    private $nom;
    private $prenom;
    private $dateDeNaissance;
    private $ville;
    private $allCounts;//ensemble de comptes bancaires 
    //le construct
    public function __construct($nom, $prenom,$dateDeNaissance,$ville)
    {
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> dateDeNaissance = $dateDeNaissance;
        $this -> ville = $ville;
        $this -> allCounts = [];   
    }
    //setter et getter de nom
    public function setNom($nom){
        $this -> nom = $nom;
    }
    public function getNom(){
        return $this -> nom ;
    }
    //setter et getter de prenom 
    public function setPrenom($prenom){
        $this -> prenom = $prenom;
    }
    public function getPrenom(){
        return $this -> prenom;
    }
    //setter et getter de dateDeNaissance 
    public function setDateDeNaissance($dateDeNaissance){
        $this -> dateDeNaissance = $dateDeNaissance;
    }
    public function getDateDeNaissance(){
        return $this -> dateDeNaissance;
    }
    //setter et getter de ville 
    public function setVille($ville){
        $this -> ville = $ville;
    }
    public function getVille(){
        return $this -> ville;
    }
    //setter et getter de allCounts
    public function setAllCounts($allCounts){
        $this -> allCounts = $allCounts;
    }
    public function getAllCounts(){
        return $this -> allCounts;
    }
    //les methodes
    //la methode qui affecte un compte au titulaire
    public function ajouterCompte( Compte $compte){
        $this -> allCounts[] = $compte;
    }
    /*la methode qui affiche tout les compte detenu par le titulaire 
    public function afficherCompteTitulaire(){
       foreach( $this ->allCounts as $compte){
            echo "$compte<br>";
        }
    }*/
    //la methode aui permet de calculer l age du titulaire
    public function calculAge(){
        $dateAujourdhui = new DateTime('now');
        $dateN = new DateTime($this->dateDeNaissance);
        $age = $dateN->diff($dateAujourdhui);
        return $age->format("%Y");
    }
    //la methode qui va afficher les info du titulaire
    public function afficherInfos(){
        echo 'Titulaire: <strong>'.$this -> nom .'</strong> '. $this -> prenom . ' <br>'. $this-> calculAge().' ans  a '. $this -> ville.'<br> ';
        echo '************************************************************************************<br>';
        foreach( $this ->allCounts as $compte){
            echo "$compte<br>";
        }     
        echo'<br><br>';   
    }
    //on  va stringer la classe 
    public function __toString()
    {
        return $this -> nom .' '. $this -> prenom . ' '. $this-> calculAge().'ans de '. $this -> ville.'<br> ';
    }
}
?>