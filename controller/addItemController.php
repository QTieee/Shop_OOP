<?php
include_once "../models/ProductModel.php";

class ProductController {
    private $model;

    public function __construct($conn) {
        $this->model = new ProductModel($conn);
    }

    public function uploadProduct() {
        if(isset($_POST['upload'])) {
            $productName = $_POST['p_name'];
            $productDesc = $_POST['p_desc'];
            $productPrice = $_POST['p_price'];
            $productCategory = $_POST['categories'];

            $name = $_FILES['file']['name'];
            $temp = $_FILES['file']['tmp_name'];

            $location = "./uploads/";
            $image = $location . $name;

            $targetDir = "../uploads/";
            $finalImage = $targetDir . $name;

            move_uploaded_file($temp, $finalImage);

            $result = $this->model->addProduct($productName, $productDesc, $productPrice, $productCategory, $image);
            echo $result;
        }
    }
}

// Include connection file
include_once "../AdditionalPHP/connection.php";

// Create controller instance with connection
$controller = new ProductController($conn);

// Call uploadProduct method
$controller->uploadProduct();
?>
<!-- xong phần code thêm sản phẩm -->