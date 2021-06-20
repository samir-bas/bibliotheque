<?php

require_once "Models/connect_db.php";
require_once 'Entity/author.php';

class AuthorModel extends Database
{
    public function getAuthors()
    {
        $requete = "Select * from author";
        $result = $this->connect()->query($requete);
        $result = $result->fetchAll(PDO::FETCH_CLASS, "Author");
        return $result;
    }

    public function addAuthor(author $author)
    {
        $requete = "insert into author (nom_auteur, prenom_auteur) values (?, ?)" ;
        $result = $this->connect()->prepare($requete);
        $result = $result->execute([
            $author->getNom_auteur(),
            $author->getPrenom_auteur()
        ]);
        return $result;
    }

    public function UpdateAuthor(author $author)
    {
        $requete = "update author set nom_auteur = ?, prenom_auteur = ? where id = ?" ;
        $result = $this->connect()->prepare($requete);
        $result = $result->execute([
            $author->getNom_auteur(), 
            $author->getPrenom_auteur(), 
            $author->getId()
        ]);
        return $result;
    }

    public function getAuthorById($id)
    {
        $requete = "Select * from author where id = ?" ;
        $result = $this->connect()->prepare($requete);
        $result->execute([$id]);
		$author = $result->fetch(PDO::FETCH_ASSOC);
		return new Author($author);
    }

    public function deleteAuthorById($id)
    {
        $requete = "Delete from author where id = ?" ;
        $result = $this->connect()->prepare($requete);
        $result->execute([$id]);
		return $result;
    }

}

?>