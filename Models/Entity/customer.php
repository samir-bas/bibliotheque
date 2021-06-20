<?php 

Class Customer 
{
  protected int $id;
  protected string $nom_client;
  protected string $emailL;
  protected string $date_naissance;
  protected string $adresse;
  protected string $date_inscription;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getNom_client()
  {
    return $this->nom_client;
  }

  public function setNom_client($nom_client)
  {
    $this->nom_client = $nom_client;
  }

  public function getDate_naissance()
  {
    return date("d/m/Y", strtotime($this->date_naissance));
  }
  
  public function setDate_naissance($date_naissance)
  {
    $this->date_naissance = $date_naissance;
  }

  public function getAdresse()
  {
    return $this->adresse;
  }

  public function setAdresse($adresse)
  {
    $this->adresse = $adresse;
  }

  public function getDate_inscription()
  {
    return date("d/m/Y", strtotime($this->date_inscription));
  }

  public function setDate_inscription($date_inscription)
  {
    $this->date_inscription = $date_inscription;
  }
}

?>