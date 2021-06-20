<?php
    require_once "Models/bookModel.php";
    $bookModel = new BookModel();
    $books = $bookModel->getBooks();
    // echo "<pre>";
    // var_dump($books);
    // echo "</pre>";
    require_once "Views/bookListView.php";
?>