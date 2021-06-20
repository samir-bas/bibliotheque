<?php

class Book
{
   protected int $ISBN;
   protected string $titre_livre;
   protected int $category_id;
   protected int $author_id;
   protected int $customer_id;
   protected string $img_livre;
   protected int $nb_page;
   protected string $resume;
   protected string $auteur;
   
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

   public function getISBN()
   {
      return $this->ISBN;
   }

   public function setISBN($ISBN)
   {
      $this->ISBN = $ISBN;
   }

   public function getTitre_livre()
   {
      return $this->titre_livre;
   }

   public function setTitre_livre($titre_livre)
   {
      $this->titre_livre = $titre_livre;  
   }

   public function getCategory_id()
   {
      return $this->category_id;
   }

   public function setCategory_id($category_id)
   {
      $this->category_id = $category_id;
   }
   
   public function getAuthor_id()
   {
      return $this->author_id;
   }

  public function setAuthor_id($author_id)
   {
      $this->author_id = $author_id;
   }
 
   public function getCustomer_id()
   {
      return $this->customer_id;
   }

   public function setCustomer_id($customer_id)
   {
      $this->customer_id = $customer_id;
   }

   public function getImg_livre()
   {
      return $this->img_livre;
   }

   public function setImg_livre($img_livre)
   {
      $this->img_livre = $img_livre;
   }

   public function getNb_pages()
   {
      return $this->nb_pages;
   }

   public function setNb_pages($nb_pages)
   {
      $this->nb_pages = $nb_pages;
   }

   public function getResume()
   {
      return $this->resume;
   }

   public function setResume($resume)
   {
      $this->resume = $resume;
   }

   public function getAuteur()
   {
      return $this->auteur;
   }

   public function setAuteur($auteur)
   {
      $this->auteur = $auteur;
   }
}
?>