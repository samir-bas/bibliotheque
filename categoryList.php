<?php

    require_once "Models/categoryModel.php";
    $categoryModel = new CategoryModel();
    $categories = $categoryModel->getCategories();
    require_once "Views/categoryListView.php";
    
?>