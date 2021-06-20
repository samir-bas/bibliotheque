<?php
    require_once "Models/bookModel.php";
    $bookModel = new BookModel();
    $books = $bookModel->getBooks();
    require_once "Views/bookListView.php";
?>