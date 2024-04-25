<?php
// ProductModel.php

class ProductModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products_test";
        $result = $this->conn->query($sql);
        $products = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }

    public function addProduct($productName, $productDesc, $productPrice, $productCategory, $image) {
        $insert = mysqli_query($this->conn, "INSERT INTO products_test
            (p_name, p_img, p_price, p_desc, p_cat_id) 
            VALUES ('$productName', '$image', '$productPrice', '$productDesc', '$productCategory')");

        if(!$insert) {
            return mysqli_error($this->conn);
        } else {
            return "Records added successfully.";
        }
    }
}
?>
<!-- xong phần code thêm sản phẩm -->