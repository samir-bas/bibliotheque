<?php

require_once "Models/connect_db.php";
require_once 'Entity/category.php';

class CategoryModel extends Database
{
    public function getCategories()
    {
        $requete = "Select * from category";
        $result = $this->connect()->query($requete);
        $result = $result->fetchAll(PDO::FETCH_CLASS, "Category");
        return $result;
    }

    public function addCategory(Category $category)
    {
        $requete = "insert into category (libelle) values (?)" ;
        $result = $this->connect()->prepare($requete);
        $result = $result->execute([$category->getLibelle()]);
        return $result;
    }

    public function UpdateCategory(Category $category)
    {
        $requete = "update category set libelle = ? where id = ?" ;
        $result = $this->connect()->prepare($requete);
        $result = $result->execute([$category->getLibelle(), $category->getId()]);
        return $result;
    }

    public function getCategoryById($id)
    {
        $requete = "Select * from category where id = ?" ;
        $result = $this->connect()->prepare($requete);
        $result->execute([$id]);
		$category = $result->fetch(PDO::FETCH_ASSOC);
		return new Category($category);
    }

    public function deleteCategoryById($id)
    {
        $requete = "Delete from category where id = ?" ;
        $result = $this->connect()->prepare($requete);
        $result->execute([$id]);
		return $result;
    }

}

?>