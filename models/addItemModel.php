<?php

include_once "../AdditionalPHP/connection.php";

class ProductModel {
    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['conn'];
    }

    public function insertProduct($product_name, $product_image, $price, $product_desc, $category_id) {
        $insert = mysqli_query($this->conn, "INSERT INTO product (p_name, p_img, p_price, p_desc, categoryID) VALUES ('$product_name', '$product_image', $price, '$product_desc', $category_id)");

        if (!$insert) {
            return mysqli_error($this->conn);
        }

        return true;
    }
}
?>
