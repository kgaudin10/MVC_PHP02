<?php
class Utilisateur {
   
  private $login;
  private $mdp
  private $nom;
  private $prenom;

  //Getter Générique
  public function __get($nom_attribut) {
    return $this->$nom_attribut;  
  }


  $objet->$nom_attribut;
      
  //Setter Générique
  public function __set($nom_attribut, $value){
  return $this->$nom_attribut = $value;
  }

  // un constructeur Générique
  public function __construct($data = NULL)
  if(!is_null($data)){

    $this->$nom_attribut = $data;
  }  

  public static function getAllUtilisateurs(){

    $_REQUEST ="SELECT * from utilisateur";
    $rep = Model::$pdo->query($_REQUEST);
    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

    foreach($tab_obj as $cle => $valeur){
      print_r($valeur);
    }
  }
 
}
?>