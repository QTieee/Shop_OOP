<?php
// ProductController.php
include_once "../AdditionalPHP/connection.php";
include_once "../models/ProductModel.php";

class ProductController {
    private $productModel;
    private $conn;

    public function __construct($conn) {
        $this->productModel = new ProductModel($conn);
        $this->conn = $conn;
    }

    public function index() {
        $products = $this->productModel->getAllProducts();
        include_once "../adminView/viewAllProducts.php";
    }

    public function addProduct() {
        if(isset($_POST['upload'])) {
            $productName = $_POST['p_name'];
            $description = $_POST['p_desc'];
            $price = $_POST['p_price'];
            $category = $_POST['categories'];
            
            $name = $_FILES['file']['name'];
            $temp = $_FILES['file']['tmp_name'];
        
            $location="./uploads/";
            $image=$location.$name;
    
            $target_dir="../uploads/";
            $finalImage=$target_dir.$name;
    
            move_uploaded_file($temp,$finalImage);
            $insert = $this->productModel->addProduct($productName, $image, $price, $description, $category, $this->conn);
     
            if(!$insert) {
                echo mysqli_error($this->conn);
            } else {
                echo "Records added successfully.";
            }
        }
    }
}

?>