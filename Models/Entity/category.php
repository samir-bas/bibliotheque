<?php

class Category 
{
    protected int $id;
    protected string $libelle;

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

     public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;
    }
}

?>
