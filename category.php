<?php

require_once "Models/categoryModel.php";

$action = $_GET["action"];

switch($action) {
    case "add" :
        $id = 0;
        break;

    case "update" :
        $id = $_GET["id"];
        $categoryModel = new CategoryModel();
        $category = $categoryModel->getCategoryById($id);
        break;
    
    case "delete" :
        $id = $_GET["id"];
        $categoryModel = new CategoryModel();
        $nb = $categoryModel->deleteCategoryById($id);
        if (!empty($nb)) {
            header("Location: categorylist.php");
        } else {
            echo "Ligne non supprimé";
        }
        exit();

}
if (isset($_POST["validateForm"])) 
{
    $categoryModel = new CategoryModel();
    $category = new Category($_POST);
    if (empty($id)) {
        $result = $categoryModel->addCategory($category);
    } else {
        $result = $categoryModel->updateCategory($category);
    }

    if ($result) {
        header("Location: categorylist.php");
        exit();
    }
}
    require_once "Views/categoryForm.php";
?>