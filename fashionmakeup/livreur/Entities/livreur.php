<?php
class livreur
{
  private $nom;
  private $prenom;
  private $tel;
  private $email;
  private $mdp;

  function __construct($nom,$prenom,$tel,$email,$mdp)
  {
$this->nom=$nom;
$this->prenom=$prenom;
$this->tel=$tel;
$this->email=$email;
$this->mdp=$mdp;

}
  function getNom(){
    return $this->nom;
  }
  function setNom($nom){
    $this->nom=$nom;
  }
  function getPrenom(){
    return $this->prenom;
  }
  function setPrenom($prenom){
    $this->prenom=$prenom;
  }
  function getTel(){
    return $this->tel;
  }
  function setTel($tel){
    $this->tel=$tel;
  }
  function getEmail(){
    return $this->email;
  }
  function setEmail($email){
    $this->email=$email;
  }
  function getMdp(){
    return $this->mdp;
  }
  function setMdp($mdp){
    $this->mdp=$mdp;
  }
}


 ?>
