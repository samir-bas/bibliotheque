<?php

require_once "Models/connect_db.php";
require_once "Entity/book.php";

class BookModel extends Database
{

    public function getBooks()
    {
        $requete = "Select book.*, author.id, concat(author.nom_auteur,' ', author.prenom_auteur) as nom,
            category.id, category.libelle
        from book 
            inner join author on book.author_id = author.id
            inner join category on book.category_id = category.id
            order by book.isbn 
        ";
        $result = $this->connect()->query($requete);
        $result = $result->fetchAll(PDO::FETCH_CLASS,"book");
        return $result;
    }

    public function addBook(Book $Book)
    {
        $requete = "insert into Book (titre_livre, category_id, author_id, customer_id, img_livre, nb_pages, resume, auteur) 
        values (?, ?, ?, ?, ?, ?, ?, ?)" ;
        $result = $this->connect()->prepare($requete);
        $result = $result->execute([
            $Book->getTitre_livre(),
            $Book->getCategory_id(),
            $Book->getAuthor_id(),
            $Book->getCustomer_id(),
            $Book->getImg_livre(),
            $Book->getNb_pages(),
            $Book->getResume(),
            $Book->getAuteur()
        ]);
        return $result;
    }

    public function UpdateBook(Book $Book)
    {
        $requete = "update Book set 
            titre_livre = ?, 
            category_id = ?, 
            author_id = ?, 
            customer_id = ?, 
            img_livre = ?, 
            nb_pages = ?, 
            resume = ?,
            auteur = ?
        where isbn = ?" ;
        $result = $this->connect()->prepare($requete);
        $result = $result->execute([
            $Book->getTitre_livre(), 
            $Book->getCategory_id(),
            $Book->getAuthor_id(), 
            $Book->getCustomer_id(),
            $Book->getImg_livre(), 
            $Book->getNb_pages(),
            $Book->getResume(),
            $Book->getauteur(),
            $Book->getISBN()       
        ]);
        return $result;
    }

    public function getBookById($isbn)
    {
        $requete = "Select * from book where isbn = ?" ;
        $result = $this->connect()->prepare($requete);
        $result->execute([$isbn]);
		$Book = $result->fetch(PDO::FETCH_ASSOC);
		return new Book($Book);
    }

    public function deleteBookById($isbn)
    {
        $requete = "Delete from book where isbn = ?" ;
        $result = $this->connect()->prepare($requete);
        var_dump($result);
        $result->execute([$isbn]);
		return $result;
    }

}
?>