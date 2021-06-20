<?php

class Author
{
   protected int $id;
   protected string $nom_auteur;
   protected string $prenom_auteur;
  
   public function __construct(array $data = null) {
      if($data) {
          $this->hydrate($data);
      }
  }

  protected function hydrate(array $data) {
      foreach ($data as $key => $value) {
        $method = "set" . ucfirst($key);
        if(method_exists($this, $method)) {
          // Santize every entries in object
          $value = htmlspecialchars($value);
          $this->$method($value);
        }
      }
   }
   
   public function getId()
   {
      return $this->id;
   }

   public function setId($id)
   {
      $this->id = $id;
   }

   public function getNom_auteur()
   {
      return $this->nom_auteur;
   }
 
   public function setNom_auteur($nom_auteur)
   {
      $this->nom_auteur = $nom_auteur;
   }

   public function getPrenom_auteur()
   {
      return $this->prenom_auteur;
   }

   public function setPrenom_auteur($prenom_auteur)
   {
      $this->prenom_auteur = $prenom_auteur;
   }
}
?>