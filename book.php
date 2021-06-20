<?php

require_once "Models/BookModel.php";
require_once "Models/categoryModel.php";
// require_once "Models/authorModel.php";

$categoryModel = new CategoryModel();
$categories = $categoryModel->getCategories();
// $authorModel = new AuthorModel();
// var_dump($authorModel);
// $authors = $authorModel->getAuthors();

$action = $_GET["action"];
// echo $_GET["action"];

switch($action) {
    case "add" :
        $isbn = 0;
        break;

    case "update" :
        $isbn = $_GET["isbn"];
        $bookModel = new BookModel();
        $book = $bookModel->getBookById($isbn);
        break;
    
    case "delete" :
        $id = $_GET["isbn"];
        $bookModel = new BookModel();
        $nb = $bookModel->deleteBookById($isbn);
        if (!empty($nb)) {
            header("Location: Booklist.php");
        } else {
            echo "Ligne non supprimé";
        }
        exit();

}
if (isset($_POST["validateForm"])) 
{
    $bookModel = new BookModel();
    $book = new Book($_POST);
    if (empty($isbn)) {
        $result = $bookModel->addBook($book);
    } else {
        $result = $bookModel->updateBook($book);
    }

    if ($result) {
        header("Location: booklist.php");
        exit();
    }
}
    require_once "Views/bookForm.php";
?>