<?php
// CategoryController.php
include_once "../AdditionalPHP/connection.php";
include_once "../models/CategoryModel.php";

class CategoryController {
    private $categoryModel;

    public function __construct($conn) {
        $this->categoryModel = new CategoryModel($conn);
    }

    public function index() {
        $categories = $this->categoryModel->getAllCategories();
        include_once "../adminView/viewCategories.php";
    }
}
?>
